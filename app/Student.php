<?php

// пространство имён 
namespace App;

class Student {
    // свойтсва
    public $name;
    public $age;

    // методы 
    public function greet() {
        return "Привет, я студент!";
    }

    public function  printObject() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}
