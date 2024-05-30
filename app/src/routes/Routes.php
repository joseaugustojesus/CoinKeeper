<?php


namespace src\routes;

use src\controllers\ExampleController;
use src\controllers\UserController;
use src\middlewares\need2BeLoggedIn;

$router = new Router;


$router->get("/", ExampleController::class, "example", [need2BeLoggedIn::class]);
$router->get("/account/new", UserController::class, "new", [need2BeLoggedIn::class]);


return $router->init();
