<?php 

namespace App;

class Bicycle extends Vehicle {
    public function start() {
        echo "Bicycle is starting...<br>";
    }
    public function stop() {
        echo "Bicycle is stopping...<br>";
    }
}