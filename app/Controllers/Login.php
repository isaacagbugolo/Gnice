<?php


class Login extends Controller{
   

    public function login(){
        echo 'login';
        $data = [];
        $this->view('Account/login', $data);
    }
}