<?php
declare(strict_types=1);

namespace App\Application\Income\Controller;

use App\Model\Income\Income;
use App\Model\Income\IncomeRepositoryInterface;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IncomeFormController
{
    private IncomeRepositoryInterface $incomeRepository;

    public function __construct(IncomeRepositoryInterface $incomeRepository)
    {
        $this->incomeRepository = $incomeRepository;
    }

    public function get(ServerRequestInterface $request): ResponseInterface
    {
        // This is where we will render our forms or base view for area
        return new JsonResponse([
            'message' => 'hello people!'
        ], 200);
    }

    /*
     * Please Note!!! These responses are not correct, this is just ab basic implementation to get a flow in mind
     * and going
     */
    public function post(ServerRequestInterface $request): ResponseInterface
    {
        $data = $request->getParsedBody();

        $income = new Income(-1, $data['name'], (float) $data['amount']);

        if($this->incomeRepository->create($income))
            return new JsonResponse([
                'success' => true
            ], 200);

        return new JsonResponse([
            'success' => false
        ], 400);
    }
}