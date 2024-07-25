<?php

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