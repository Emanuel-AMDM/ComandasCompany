<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/constants.php';

$router = new \Bramus\Router\Router();

// home
$router->get('/', function () {
    view('pages/home.php');
});

// comands
$router->get('/comandas', function () {
    view('pages/comands/index.php');
});

$router->get('/comandas/edit', function () {
    view('pages/comands/edit.php');
});

$router->get('/comandas/bill', function () {
    view('pages/comands/bill.php');
});

// products
$router->get('/produtos', function () {
    view('pages/products/index.php');
});

$router->get('/produtos/create', function () {
    view('pages/products/create.php');
});

$router->get('/produtos/edit', function () {
    view('pages/products/edit.php');
});

// pre-cadastro
$router->get('/pre-cadastro', function () {
    view('pages/pre-registration/index.php');
});

$router->get('/pre-cadastro/create', function () {
    view('pages/pre-registration/create.php');
});

$router->get('/pre-cadastro/edit', function () {
    view('pages/pre-registration/edit.php');
});

$router->run();