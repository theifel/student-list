<?php

use App\Components\Db;
use App\Components\Request;
use App\Components\Router;
use App\Controllers\FrontController;

const ROOT = __DIR__;

require ROOT . '/../vendor/autoload.php';

$request = new Request();
$router = new Router($request);
$dbh = new Db();

$fc = FrontController::getInstance();
$fc->route($router, $request);

echo $fc->getBody();