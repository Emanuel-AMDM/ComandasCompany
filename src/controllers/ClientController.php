<?php

class ClientController{
    //renderiza a pagina home
    static function showLoginPage(){
        view('pages/auth/login.php');
    }

    static function Login(){
        //cria a instancia clientDAO
        $clientDAO = new ClientDAO();

        //cria a instancia client
        $client = new Client();

        //campos via post
        $client->email = $_POST['email'];
        $client->email = $_POST['password'];

        $clientDAO->Login($client);

        
    }
}