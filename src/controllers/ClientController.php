<?php

session_start();

class ClientController{
    //renderiza a pagina home
    static function showLoginPage(){
        view('pages/auth/login.php');
    }

    static function login(){
        //cria a instancia clientDAO
        $clientDAO = new ClientDAO();
        
        $client = $clientDAO->findByEmail($_POST['email']);

        if($client->email == null || $client->email != $_POST['email']){
            return redirect('/login');
        }

        if($client->password != $_POST['password']){
            return redirect('/login');
        }

        $_SESSION['user'] = $client;

        redirect('/');
    }

    static function logout(){
        session_destroy();

        redirect('/login');
    }
}