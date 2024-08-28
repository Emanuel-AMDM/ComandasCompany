<?php
//chamada do public
//public_url('/javascript/fontawesome.js')

//chamada do url
//url("/produtos/$row->id/edit")

//chamada do redirect
//redirect('/pre-cadastro/create');

function public_url($path): string
{
    return HOST . "/public/" . $path;
}

function url($path): string
{
    return HOST . $path;
}

function redirect($path){
    header('Location: ' . url($path));
}