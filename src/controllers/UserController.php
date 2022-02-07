<?php

namespace Ahmedmahfouz\Mvc\controllers;

use Ahmedmahfouz\Mvc\models\User;


class UserController extends Controller {

    public function index(){
        $user = new User;
        $data = $user->getUsers();
        $data = json_encode($data);
        $data = json_decode( $data , true);

        
        $this->view('user/index',['data'=>$data]);
    }

    public function add(){
        $this->view('user/add');
    }

    public function store()
    {
        $user = new User;
        $user->insertUser($_POST);

       return $this->add();
    }

    public function update()
    {
        $user = new User;
        $user->updateUser();
        echo "done";
    }
        

    
  
}