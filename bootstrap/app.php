<?php

use App\Controller\HomeController;
use App\Config\Router;


require_once __DIR__ . '/../vendor/autoload.php';

define('BASE_URL', __DIR__ . '/../');
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
    return (new HomeController())->index();
});

$app->route('/list', function () {
    return (new HomeController())->list();
});


$app->route('/error', function () {
    return (new HomeController())->error();
});

$app->route('/submitted', function () {
    return (new HomeController())->submitted();
});


//fetch requested url path
$request = $_SERVER['REQUEST_URI'];


//execute the route
$app->executeRoutes($request);

return $app;