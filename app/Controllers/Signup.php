<?php

class Signup extends Controller{

     public function index(){
        echo 'signup';
        $data = [];
        $this->view('Account/signup', $data);
    }
}