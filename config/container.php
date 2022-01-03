<?php
declare(strict_types=1);

use Laminas\Diactoros\ResponseFactory;

$container = new League\Container\Container();

/**
 * Controllers
 */
$container->add('App\Application\Home\Controller\homeController', App\Application\Home\Controller\homeController::class);
$container->add('App\Application\Income\Controller\IncomeFormController', App\Application\Income\Controller\IncomeFormController::class)
    ->addArgument(App\Model\Income\IncomeRepositoryInterface::class);

/**
 * Aliases/Repositories
 */
$container->add(App\Model\Income\IncomeRepositoryInterface::class, App\Infatructure\Income\Repository\IncomeRepository::class);

$strategy = (new League\Route\Strategy\ApplicationStrategy)->setContainer($container);
