<?php


class Home extends Controller{
   

    public function index(){
        echo 'home';
        $data = [];
        $this->view('Home/index', $data);
    }
}