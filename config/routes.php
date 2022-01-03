<?php
declare(strict_types=1);

//pre load container that routes can wire to classes
require_once 'container.php';

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
);

$router   = (new League\Route\Router)->setStrategy($strategy);

try {
//We can split these into classes or different files
    $router->map('GET','/', 'App\Application\Home\Controller\homeController::get');

    $router->map('GET','/income/create', 'App\Application\Income\Controller\IncomeFormController::get');
    $router->map('POST','/income/create', 'App\Application\Income\Controller\IncomeFormController::post');

    $response = $router->dispatch($request);
    (new Laminas\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);
} catch (Exception $exception) {
    die('THere seems to be some routing issues NEIL');
}


