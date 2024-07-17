<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/constants.php';

$router = new \Bramus\Router\Router();

// home
$router->get('/', function () {
    return HomeController::showHomePage();
});

// comands
$router->get('/comandas', function () {
    return OrdersController::showIndexPage();
});

$router->get('/comandas/create', function () {
    return OrdersController::showCreatePage();
});

$router->get('/comandas/edit', function () {
    return OrdersController::showEditPage();
});

$router->get('/comandas/bill', function () {
    return OrdersController::showBillPage();
});

// products
$router->get('/produtos', function () {
    return ProductsController::showIndexPage();
});

$router->get('/produtos/create', function () {
    return ProductsController::showCreatePage();
});

$router->get('/produtos/edit', function () {
    return ProductsController::showEditPage();
});

// pre-cadastro
// brand
$router->get('/pre-cadastro', function () {
    return PreRegistrationController::showIndexPage();
});

$router->get('/pre-cadastro/create', function () {
    return PreRegistrationController::showCreatePage();
});

$router->get('/pre-cadastro/edit', function () {
    return PreRegistrationController::showEditPage();
});

$router->run();