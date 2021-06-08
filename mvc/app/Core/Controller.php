<?php 

class Controller{
     //load model
     public function model($model){
         // require model file

         require_once '../app/models/' .$model. '.php';
         
         // Instantiate model
         return new $model();
         
        }

        //load view
        public function view($view, $data = []){

            //check for view file
            if(file_exists('../app/views/' . $view . '.html')){
                require_once '../app/views/' . $view . '.html';
            }else{
                //view does not exist
                include_once "../app/views/404.html";
                die('view does not exist');
            }

        }

        
    }