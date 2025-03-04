<?php 
namespace App;

abstract class Person {
    protected $name;
    protected $age;

    protected $prodectedProperty = 'ProdectedProperty';

    // у абстрактных методов нет реализации
    public abstract function introduce();

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