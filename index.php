<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/constants.php';

$router = new \Bramus\Router\Router();

$router->get('/', function () {
    view('includes/header.php');
    view('pages/home.php');
});

$router->run();