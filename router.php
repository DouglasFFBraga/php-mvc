<?php

use SON\Router;
use App\Controllers\UsersController;

$router = new Router();

$router["/"] = [
    "class" => UsersController::class,
    "action"     => "index"
];

$router["/users"] = [
    "class" => UsersController::class,
    "action"     => "show"
];

return $router;
