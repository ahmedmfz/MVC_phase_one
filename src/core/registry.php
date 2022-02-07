<?php

namespace Ahmedmahfouz\Mvc\core;


class registry{
    public static $obj;


    public static function set($key,$value){
        self::$obj[$key] = $value;
    }

    public static function get($key){
        return self::$obj[$key];
    }

}