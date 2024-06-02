<?php


namespace src\routes;

use src\controllers\UserController;
use src\middlewares\UserCreated;

$router = new Router;


$router->get("/", UserController::class, "login");
$router->get("/account/new", UserController::class, "new");
$router->post("/account/new", UserController::class, "store");
$router->get("/account/new/successfully", UserController::class, "newSuccessfully", [UserCreated::class]);

return $router->init();
