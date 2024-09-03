<?php

class HomeController{
    //renderiza a pagina home
    static function showHomePage(){

        view('pages/home.php', [
            'usuario' => 'Emanuel'
        ]);
    }
}