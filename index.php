<?php
session_start();

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/constants.php';

$router = new \Bramus\Router\Router();


//login
$router->get('/login', function () {
    return ClientController::showLoginPage();
});

$router->post('/login', function () {
    return ClientController::login();
});

$router->get('/logout', function () {
    return ClientController::logout();
});

$router->get('/register', function () {
    return ClientController::showRegisterPage();
});

$router->post('/register', function () {
    return ClientController::register();
});

// home
$router->get('/', function () {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return HomeController::showHomePage();
});

// comands
$router->get('/comandas', function () {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return OrdersController::showIndexPage();
});

$router->get('/comandas/create', function () {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return OrdersController::showCreatePage();
});

$router->post('/comandas/create', function () {
    return OrdersController::createOrder();
});

$router->get('/comandas/{id}/edit', function ($id) {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return OrdersController::showEditPage($id);
});

$router->get('/comandas/{id}/delete', function ($id) {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return OrdersController::deleteOrder($id);
});

$router->get('/item/{id}/delete', function ($id) {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return OrderItemController::deleteOrderItem($id);
});

$router->post('/comandas/{id}/edit', function ($id) {
    return OrderItemController::createOrderItem($id);
});

$router->get('/comandas/{id}/bill', function ($id) {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return OrdersController::showBillPage($id);
});

// products
$router->get('/produtos', function () {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return ProductsController::showIndexPage();
});

$router->get('/produtos/create', function () {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return ProductsController::showCreatePage();
});

$router->post('/produtos/create', function () {
    return ProductsController::createProduct();
});

$router->get('/produtos/{id}/edit', function ($id) {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return ProductsController::showEditPage($id);
});

$router->post('/produtos/{id}/edit', function ($id) {
    return ProductsController::editProduct($id);
});

$router->get('/produtos/{id}/delete', function ($id) {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return ProductsController::deleteProduct($id);
});

// pre-cadastro
// brand
$router->get('/pre-cadastro', function () {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return RegistrationController::showIndexPage();
});

$router->get('/pre-cadastro/create', function () {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return RegistrationController::showCreatePage();
});

$router->post('/pre-cadastro/create', function () {
    return RegistrationController::createRegistration();
});

$router->get('/pre-cadastro/{id}/edit', function ($id) {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return RegistrationController::showEditPage($id);
});

$router->post('/pre-cadastro/{id}/edit', function ($id) {
    return RegistrationController::editRegistration($id);
});

$router->get('/pre-cadastro/{id}/delete', function ($id) {
    if(!isset($_SESSION['user'])){
        redirect('/login');
    }
    return RegistrationController::deleteRegistration($id);
});

$router->run();