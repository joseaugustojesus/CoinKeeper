<?php


namespace src\routes;

use src\controllers\UserController;
use src\middlewares\HasSecret;
use src\middlewares\UserCreated;

$router = new Router;

$router->get("/", UserController::class, "login");
$router->get("/account/new", UserController::class, "new");
$router->post("/account/new", UserController::class, "store");
$router->get("/account/new/successfully", UserController::class, "newSuccessfully", [UserCreated::class]);
$router->get("/account/password/reset", UserController::class, "passwordReset");
$router->get("/account/password/reset/preflight", UserController::class, "preflight");
$router->get("/account/password/reset/confirm", UserController::class, "passwordConfirm", [HasSecret::class]);
$router->post("/account/password/reset/confirm", UserController::class, "passwordModify", [HasSecret::class]);

return $router->init();
