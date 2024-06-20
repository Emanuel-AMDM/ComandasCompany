<?php

function view($path, $variables = [])
{
    extract($variables);
    require __DIR__ . '/../views/' . $path;
}
