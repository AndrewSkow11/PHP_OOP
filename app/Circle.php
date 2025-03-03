<?php

namespace App;

class Circle extends Shape
{
    public $radius; // радиус
    function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    function printCircleInfo() {
        echo "Circle name: ". $this->name. ", radius: ". $this->radius. ", area: ". $this->calculateArea(). "\n";
    }
}
