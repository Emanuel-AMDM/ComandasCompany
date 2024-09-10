<?php

class ClientController{
    //renderiza a pagina home
    static function showLoginPage(){
        view('pages/auth/login.php');
    }
    
    static function login(){
        session_start();
        //cria a instancia clientDAO
        $clientDAO = new ClientDAO();
        
        $client = $clientDAO->findByEmail($_POST['email']);

        if($client->email == null || $client->email != $_POST['email']){
            return redirect('/login');
        }

        if($client->password != $_POST['password']){
            return redirect('/login');
        }

        $_SESSION['user'] = serialize($client);

        redirect('/');
    }

    static function logout(){
        session_destroy();

        redirect('/login');
    }

    //renderiza a pagina home
    static function showRegisterPage(){
        view('pages/auth/register.php');
    }

    //registra um usuario
    static function register(){
        //crio a instancia client
        $client = new Client();

        $client->name = $_POST['name'];
        $client->email = $_POST['email'];
        $client->password = $_POST['password'];

        $clientDAO = new ClientDAO();

        $clientDAO->create($client);

        redirect('/login');
    }
}