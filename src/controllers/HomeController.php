<?php


class HomeController{
    //renderiza a pagina home
    static function showHomePage(){
        
        $client = unserialize($_SESSION['user']);

        $name = $client->name;

        view('pages/home.php', [
            'name' => $name
        ]);
    }
}