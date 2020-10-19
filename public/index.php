<?php

require '../config/Dev.php';
require '../vendor/autoload.php';

$router = new \App\config\Router();
$router->run();