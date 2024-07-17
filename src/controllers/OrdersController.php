<?php

class OrdersController{
    //renderiza a pagina
    static function showIndexPage(){
        return view('pages/orders/index.php');
    }
    //renderiza a pagina
    static function showCreatePage(){
        return view('pages/orders/create.php');
    }
    //renderiza a pagina
    static function showEditPage(){
        return view('pages/orders/edit.php');
    }
    //renderiza a pagina
    static function showBillPage(){
        return view('page/orders/bill.php');
    }
}