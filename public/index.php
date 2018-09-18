<?php
/*==================================================
=========== Developer: CaesarCl0wn =================
================ Date: 9/16/18 =====================
=============== File: index.php ====================*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$container = require __DIR__ . '/../bootstrap/container.php';

$dispatcher = require base_path('routes/web.php');

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$route = $dispatcher->dispatch($httpMethod, $uri);


switch ($route[0]) {
    case \FastRoute\Dispatcher::NOT_FOUND:
        {
            echo "Error 404";
            break;
        }
    case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        {
            echo "Method Not Allowed";
            break;
        }

    case \FastRoute\Dispatcher::FOUND:
        {
            $controllers = $route[1];
            $params = $route[2];
            $container->call($controllers, $params);
        }
}