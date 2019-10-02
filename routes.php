<?php

use App\Controller\Controller;
use App\Config\Router;


require_once __DIR__ . '/vendor/autoload.php';

define('BASE_URL', __DIR__ . '/');
define('VIEW_PATH', __DIR__ . '/../views');


/*
 * Set Error reporting for multiple environments
 *
 * */
switch (getenv("APP_ENV")) {
    case 'local':
    case 'staging':
        error_reporting(E_ALL);
        break;
    case 'production':
        error_reporting(0);
        break;
}

/**
 * Initializing Routes
 */
$app = new Router();

$app->route('/', function () {
    return (new Controller())->index();
});

$app->route('/list', function () {
    return (new Controller())->Contactlist();
});


//fetch requested url path
$request = $_SERVER['REQUEST_URI'];


//execute the route
$app->executeRoutes($request);

return $app;