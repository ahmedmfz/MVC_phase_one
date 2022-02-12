<?php

namespace Ahmedmahfouz\Mvc\controllers;

use Ahmedmahfouz\Mvc\core\View;
use Ahmedmahfouz\Mvc\models\User;


class UserController extends Controller {

    public function index(){

        $user = new User;
        $data['user'] = $user->getUsers();
        // $data['title'] = "User page";
       
        View::redirect('user\index',$data);
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