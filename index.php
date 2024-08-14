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

$router->get('/comandas/{id}/delete', function ($id) {
    return OrdersController::deleteOrder($id);
});

$router->get('/item/{id}/delete', function ($id) {
    return OrderItemController::deleteOrderItem($id);
});

$router->post('/comandas/edit', function () {
    return OrderItemController::createOrderItem();
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

$router->post('/produtos/create', function () {
    return ProductsController::createProduct();
});

$router->get('/produtos/{id}/edit', function ($id) {
    return ProductsController::showEditPage($id);
});

$router->post('/produtos/{id}/edit', function ($id) {
    return ProductsController::editProduct($id);
});

$router->get('/produtos/{id}/delete', function ($id) {
    return ProductsController::deleteProduct($id);
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

$router->get('/pre-cadastro/{id}/delete', function ($id) {
    return RegistrationController::deleteRegistration($id);
});

$router->run();