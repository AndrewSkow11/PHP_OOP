<?php 

namespace App;

class User{
    private $username;
    private $email;
    private $password;
    public function __construct($username, $email, $password){
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }
    public function getUsername(){
        return $this->username;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setUsername($username){
        if ($username !== "") $this->username = $username;
    }

    public function setEmail($email){
        if ($email !== "") $this->email = $email;
    }

    public function setPassword($password){
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }

    
    public function validateEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public function validateUsername($username){
        return preg_match("/^[a-zA-Z0-9_]{3,}$/", $username);
    }
    public function validatePassword($password){
        return strlen($password) >= 8;
    }
    public function checkPassword($password, $hashedPassword){
        return password_verify($password, $hashedPassword);
    }

    
    
}