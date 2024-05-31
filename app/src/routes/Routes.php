<?php


namespace src\routes;

use src\controllers\ExampleController;
use src\controllers\UserController;
use src\middlewares\need2BeLoggedIn;
use src\middlewares\UserCreated;

$router = new Router;


$router->get("/", ExampleController::class, "example");
$router->get("/account/new", UserController::class, "new");
$router->post("/account/new", UserController::class, "store");
$router->get("/account/new/successfully", UserController::class, "newSuccessfully", [UserCreated::class]);

return $router->init();
