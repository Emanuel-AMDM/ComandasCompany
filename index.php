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

$router->post('/comandas/create', function () {
    return OrdersController::createOrder();
});

$router->get('/comandas/{id}/edit', function ($id) {
    return OrdersController::showEditPage($id);
});

// $router->post('/comandas/{id}/edit', function ($id) {
//     return OrdersController::editOrder($id);
// });

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

$router->post('/produtos/create', function () {
    return ProductsController::createProduct();
});

$router->get('/produtos/edit', function () {
    return ProductsController::showEditPage();
});

// pre-cadastro
// brand
$router->get('/pre-cadastro', function () {
    return RegistrationController::showIndexPage();
});

$router->get('/pre-cadastro/create', function () {
    return RegistrationController::showCreatePage();
});

$router->post('/pre-cadastro/create', function () {
    return RegistrationController::createRegistration();
});

$router->get('/pre-cadastro/{id}/edit', function ($id) {
    return RegistrationController::showEditPage($id);
});

$router->post('/pre-cadastro/{id}/edit', function ($id) {
    return RegistrationController::editRegistration($id);
});

$router->run();