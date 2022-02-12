<?php

define("BASE_URL", "http://mvc.eraa/");

define('DS', DIRECTORY_SEPARATOR);
define('ROOT_PATH', dirname(__DIR__) . DS);
define("VIEW", ROOT_PATH . "views" . DS);


function url($url)
{
    echo  BASE_URL . $url;
}

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}
