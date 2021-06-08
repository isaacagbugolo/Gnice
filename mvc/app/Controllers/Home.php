<?php


class Home extends Controller{
   

    public function index(){
        echo 'Home';
        $data = [];
        $data = [
            'name'=> 'collins',
            'email'=> 'none'
        ];
        $data = json_encode($data);
        $this->view('Home/index', $data);
    }
}