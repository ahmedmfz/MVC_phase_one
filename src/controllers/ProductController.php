<?php

namespace Ahmedmahfouz\Mvc\controllers;

use Ahmedmahfouz\Mvc\core\View;


class ProductController{

    public function index(){
        View::redirect('product'.DS.'index');
    }
}