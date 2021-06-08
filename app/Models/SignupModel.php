<?php

class SignupModel extends Model{
    public function register($data){
       $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
        // bind values
       $this->db->bind(':name', $data['name']);
       $this->db->bind(':email', $data['email']);
       $this->db->bind(':password', $data['password']);
    //    $this->db->bind(':token', $data['token']);

       //execute
       if($this->db->execute()){
         return true;
     }else{
         return false;
     }
    }
}
