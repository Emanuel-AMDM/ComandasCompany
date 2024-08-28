<?php

session_start();

class ClientDAO{
    
    public function Login(Client $client){

        $query = "SELECT * FROM clients WHERE email = '$client->email'";
        $login = DB::execute_query($query);

        if(count($login) === 0){
            return "!E-mail ou Senha incorretos!";
        
        }elseif($client->email === $login['email'] && $client->password === $login['password']){
            $_SESSION['user'] = $login['id'];
        }
    }
}