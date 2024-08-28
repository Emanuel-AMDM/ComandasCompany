<?php

//chamada do controler
//

function load_controller($path){

    require __DIR__ . "./../controllers/$path.php";
}