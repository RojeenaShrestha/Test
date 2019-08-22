<?php

use App\Controller\HomeController;

require_once __DIR__.'/../vendor/autoload.php';

define('BASE_URL', __DIR__.'/../');
define('VIEW_PATH', __DIR__.'/../views');

$app = new HomeController();

return $app->index();