<?php

namespace Ahmedmahfouz\Mvc\controllers;


class Controller {

    public function __call($name, $arguments)
    {
        echo "This method : ($name) Not found";
    }

    protected function view($path , $data = [])
    {
        require "../src/views/".$path.".php";
    }
}