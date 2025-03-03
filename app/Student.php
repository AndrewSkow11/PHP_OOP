<?php

// пространство имён 
namespace App;

class Student extends Person{
    public $university;

    public function __construct($name, $age, $university) {
        parent::__construct($name, $age);
        $this->university = $university;
    }


    public function getUniversity() {
        return $this->university;
    }

    public function setUniversity($university) {
        $this->university = $university;
    }


    // методы 
    public function greet() {
        echo $this->prodectedProperty . "<br>";
        return "Привет, я студент!";
        
    }

    public function  printObject() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}

// public - публичные свойства и методы доступны из любого места кода
// protected - защищённые, доступны только внутри класса, который их определяет 
// private - закрытый, доступны только внутри класса, который их определяет 



