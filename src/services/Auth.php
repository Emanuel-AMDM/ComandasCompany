<?php

class Auth{

    static function login($user){
        //transforma o objeto em uma string
        $_SESSION['user'] = serialize($user);
    }

    static function user(){
        if(!isset($_SESSION['user'])){
            return null;
        }

        //volta a string para objeto
        return unserialize($_SESSION['user']);
    }

    static function logout(){
        unset($_SESSION['user']);
    }
}