<?php

namespace Ahmedmahfouz\Mvc\controllers;


class HomeController extends Controller{

    public function index(){
       $this->view('index');
     }
}