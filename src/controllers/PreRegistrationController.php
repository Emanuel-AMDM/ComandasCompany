<?php

class PreRegistrationController{
    //renderiza a pagina
    static function showIndexPage(){
        return view('pages/pre-registration/index.php');
    }
    //renderiza a pagina
    static function showCreatePage(){
        return view('pages/pre-registration/create.php');
    }
    //renderiza a pagina
    static function showEditPage(){
        return view('pages/pre-registration/edit.php');
    }
}