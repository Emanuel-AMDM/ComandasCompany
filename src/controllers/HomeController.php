<?php


class HomeController{
    //renderiza a pagina home
    static function showHomePage(){
        
        $client = Auth::user();

        $name = $client->name;

        view('pages/home.php', [
            'name' => $name
        ]);
    }
}