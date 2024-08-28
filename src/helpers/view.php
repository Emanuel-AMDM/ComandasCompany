<?php

//chamada da view
//view('includes/nav-bar.php')

function view($path, $variables = [])
{
    extract($variables);
    require __DIR__ . '/../views/' . $path;
}
