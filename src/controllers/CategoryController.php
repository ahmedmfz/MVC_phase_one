<?php

namespace Ahmedmahfouz\Mvc\controllers;

use Ahmedmahfouz\Mvc\core\View;


class CategoryController{

    public function index(){
        View::redirect('category'.DS.'index');
    }
}