<?php 

namespace App;

class Car extends Vehicle {
    public function start() {
        echo "Автомобиль заведён <br>";
    }

    public function stop() {
        echo "Автомобиль заглушен <br>";
    }
}

