<?php

function home_controller(){

    view('pages/home.php', [
        'usuario' => 'Emanuel'
    ]);
}