<?php 

namespace Ahmedmahfouz\Mvc\core;


class App {

    private $controller;

    private $method;

    private $params;


    public function __construct()
    {
        $this->buildUrl();
        $this->run();
    }

    private function buildUrl()
    {
        $url = $_SERVER['QUERY_STRING'];
        $url = explode("/",$url);

        $this->controller = !empty($url[0]) ? ucwords($url[0])."Controller" :'HomeController';
        $this->method     = !empty($url[1]) ?  $url[1] : 'index'  ;

        unset($url[0],$url[1]);

        $this->params =  $url ;
    }

    private function run()
    {
        $controller = "Ahmedmahfouz\Mvc\controllers\\".$this->controller;

        if(class_exists( $controller)){

            $controller = new $controller;

            call_user_func_array([$controller,$this->method],[$this->params]);
        }
        else{
            call_user_func_array(['Ahmedmahfouz\Mvc\controllers\\ErrorController','handle_error_404'],[]);
        }
    }
}

