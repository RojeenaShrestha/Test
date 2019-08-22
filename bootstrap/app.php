<?php

use App\Controller\HomeController;
use App\Router\Router;

require_once __DIR__ . '/../vendor/autoload.php';

define('BASE_URL', __DIR__ . '/../');
define('VIEW_PATH', __DIR__ . '/../views');

$app = new Router();

$app->route('/', function () {
    $appController = new HomeController();

    return $appController->index();
});

$app->route('/list', function () {
    $appController = new HomeController();

    return $appController->list();
});


$app->route('/error', function () {

    $appController = new HomeController();

    return $appController->error();
});


//fetch requested url path
$request = $_SERVER['REQUEST_URI'];


//execute the route
$app->executeRoutes($request);

return $app;