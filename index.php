<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/constants.php';

$router = new \Bramus\Router\Router();

// home
$router->get('/', function () {
    load_controller('home-controller');

    home_controller();
});

// comands
$router->get('/comandas', function () {
    load_controller('orders-controller');

    orders_controller();
});

$router->get('/comandas/edit', function () {
    load_controller('orders-controller');

    orders_edit_controller();
});

$router->get('/comandas/bill', function () {
    load_controller('orders-controller');

    orders_bill_controller();
});

// products
$router->get('/produtos', function () {
    load_controller('products-controller');

    products_controller();
});

$router->get('/produtos/create', function () {
    load_controller('products-controller');

    products_create_controller();
});

$router->get('/produtos/edit', function () {
    load_controller('products-controller');

    products_edit_controller();
});

// pre-cadastro - setor
$router->get('/pre-cadastro/setor', function () {
    load_controller('pre-registration-controller');

    pre_registration_sector_controller();
});

$router->get('/pre-cadastro/setor/create', function () {
    load_controller('pre-registration-controller');

    pre_registration_sector_create_controller();
});

$router->get('/pre-cadastro/setor/edit', function () {
    load_controller('pre-registration-controller');

    pre_registration_sector_edit_controller();
});

$router->run();