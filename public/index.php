<?php

require_once __DIR__ . '/../app/Defines.php';
require_once ROOT . '/vendor/autoload.php';

use App\Controllers\FrontController;
use App\Services\Response;
use App\Services\Request;

$app = new FrontController(new Request(), new Response());
$app->run();
