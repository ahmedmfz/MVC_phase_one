<?php 

namespace Ahmedmahfouz\Mvc\core;

class View{

    public static function redirect($file,$data = []){
        $file = VIEW.$file.'.php';

        if(file_exists($file)){
            ob_start();
            require($file);
            ob_end_flush();
        }else{
            
            call_user_func_array(['Ahmedmahfouz\Mvc\controllers\\ErrorController','handle_error_404'],[]);
        }
    }
}