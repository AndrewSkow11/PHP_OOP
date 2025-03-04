<?php

namespace App;

class User
{
    private $username;
    private $email;
    private $password;
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setUsername($username)
    {
        if ($username !== "") {
            $this->username = $username;
        } else {
            echo "Username cannot be empty";
        }
    }

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else echo "Invalid email format";
    }

    public function setPassword($password)
    {
        if (strlen($password) > 6) {
            $this->password = $password;
        } else {
            echo "Password must be at least 8 characters long";
        }
    }
}
