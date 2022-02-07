<?php 

namespace Ahmedmahfouz\Mvc\controllers;

class ErrorController extends Controller{

    public function handle_error_404(){

        echo "<div  
        style='display: flex; 
        justify-content: center; 
        align-items:center;
        font-size:50px'>

        <h1> 404 <h1>
        <h2> Not Found <h2>
        
        </div>";
    }
}