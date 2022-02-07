<?php

function asset( $path)
{
    return $path;
}

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}
