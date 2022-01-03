<?php
declare(strict_types=1);
/*
 * This will eb the general dashboard homeController with base overview of all
 * assets in the system
 */

namespace App\Application\Home\Controller;

use App\Model\Income\Income;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class homeController
{
    public function __construct() {}

    public function get(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([
            'message' => 'hello people, this is the home controller for full overview of stuff!'
        ], 200);
    }
}