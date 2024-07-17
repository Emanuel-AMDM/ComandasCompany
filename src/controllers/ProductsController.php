<?php

class ProductsController{
    //renderiza a pagina
    static function showIndexPage(){
        return view('pages/products/index.php');
    }
    //renderiza a pagina
    static function showCreatePage(){
        return view('pages/products/create.php');
    }
    //renderiza a pagina
    static function showEditPage(){
        return view('pages/products/edit.php');
    }
}