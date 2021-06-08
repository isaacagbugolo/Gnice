<?php

class Authenticate extends Model{

        // register user
    public function signup($data){
        $this->db->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
            // bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        //execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }

    }
        // login user
    public function login($email, $password){
    
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        // $this->db->bind(':token', $token);

        $row = $this->db->singleResult();

        $hashedPassword = $row->password;
        if(password_verify($password, $hashedPassword)){
            $this->updateToken($email);
            return $row;

        }else {
            return false;
        }
    }

    //find user by email
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->singleResult();

            // check row
        if($this->db->rowCount()> 0){
            return true;
        }else{
            return false;
        }
    }

 //get user by ID
    public function getUserById($id){
        $this->db->query('SELECT * FROM users WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->singleResult();
        return $row;
    }

  //verify user token
    public function verifyToken($token){
        $this->db->query('SELECT token FROM users WHERE token = :token');
        $this->db->bind(':token', $token);
        $row = $this->db->singleResult();
            // check row
        if($this->db->rowCount()> 0){
            return true;
        }else{
            return false;
        }
    }

    public function updateToken($email){
        $token = generateToken(50);
        $this->db->query('UPDATE users SET token = :token WHERE email = :email ');
        $this->db->bind(':email', $email);
        $this->db->bind(':token', $token);
        $this->db->execute();

        //set session token
        $_SESSION['token'] = $token;

    }

}