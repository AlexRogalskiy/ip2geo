<?php

define('ROOT', realpath(__DIR__ . DIRECTORY_SEPARATOR . '..') . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('CACHE', ROOT . 'var' . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR);

require_once ROOT . '/vendor/autoload.php';

use App\Controllers\FrontController;
use App\Services\Response;
use App\Services\Request;

$app = new FrontController(new Request(), new Response());
$app->run();