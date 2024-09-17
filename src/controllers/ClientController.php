<?php

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

        Auth::login($client);

        redirect('/');
    }

    static function logout(){
        Auth::logout();

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