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

$router->get('/comandas/create', function () {
    load_controller('orders-controller');

    orders_create_controller();
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

// pre-cadastro
// brand
$router->get('/pre-cadastro/marca', function () {
    load_controller('pre-registration-controller');

    pre_registration_brand_controller();
});

$router->get('/pre-cadastro/marca/create', function () {
    load_controller('pre-registration-controller');

    pre_registration_brand_create_controller();
});

$router->get('/pre-cadastro/marca/edit', function () {
    load_controller('pre-registration-controller');

    pre_registration_brand_edit_controller();
});

// flavor
$router->get('/pre-cadastro/sabor', function () {
    load_controller('pre-registration-controller');

    pre_registration_flavor_controller();
});

$router->get('/pre-cadastro/sabor/create', function () {
    load_controller('pre-registration-controller');

    pre_registration_flavor_create_controller();
});

$router->get('/pre-cadastro/sabor/edit', function () {
    load_controller('pre-registration-controller');

    pre_registration_flavor_edit_controller();
});

// sector
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

// size
$router->get('/pre-cadastro/tamanho', function () {
    load_controller('pre-registration-controller');

    pre_registration_size_controller();
});

$router->get('/pre-cadastro/tamanho/create', function () {
    load_controller('pre-registration-controller');

    pre_registration_size_create_controller();
});

$router->get('/pre-cadastro/tamanho/edit', function () {
    load_controller('pre-registration-controller');

    pre_registration_size_edit_controller();
});

// type
$router->get('/pre-cadastro/tipo', function () {
    load_controller('pre-registration-controller');

    pre_registration_type_controller();
});

$router->get('/pre-cadastro/tipo/create', function () {
    load_controller('pre-registration-controller');

    pre_registration_type_create_controller();
});

$router->get('/pre-cadastro/tipo/edit', function () {
    load_controller('pre-registration-controller');

    pre_registration_type_edit_controller();
});

$router->run();