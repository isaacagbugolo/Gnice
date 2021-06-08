<?php
header("Access-Control-Allow-Origin: *");
// header("Content-Type: Application/json");

class Signup extends Controller{
     public function index(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = sanitizeData($_POST);       
            //Init data
            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' =>trim($_POST['cpassword']),
                'errors'=> [
                    'name' => '',
                    'email'=>''
                ]
            ];
             $this->view('Signup/index', $data);
        }
        print_r(json_encode($data));
         $this->view('Signup/index', $data);
    }

}
