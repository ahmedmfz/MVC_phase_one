<?php

namespace Ahmedmahfouz\Mvc\controllers;

use Ahmedmahfouz\Mvc\core\View;


class HomeController extends Controller{

    public function index(){
      View::redirect('home');
     }
}