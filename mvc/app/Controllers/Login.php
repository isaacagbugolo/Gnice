<?php

class Login extends Controller
{
     public function index(){
        echo 'Login';
        $data = [];
        $data = [
            'name'=> 'collins',
            'email'=> 'none'
        ];
        $data = json_encode($data);
        $this->view('Login/index', $data);
    }
}
