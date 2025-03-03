<?php 
namespace App;

class Person {
    public $name;
    public $age;

    protected $prodectedProperty = 'ProdectedProperty';

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
    // геттеры 
    public function getName() {
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    // сеттеры
    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }
}