<?php

namespace Ahmedmahfouz\Mvc\models;

use Ahmedmahfouz\Mvc\core\registry;

class User{
    
    public function getUsers(){
        return registry::get('db')->table("category")->getAll();
    }
    public function insertUser($data){
        return registry::get('db')->table("category")->insert($data);
    }

    public function updateUser(){
        return registry::get('db')->table("category")->where('id'.'=','39')->update(["name"=>"asdfdsa"])->save();
    }

}

