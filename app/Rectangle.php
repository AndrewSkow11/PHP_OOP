<?php 

namespace App;

class Rectangle extends Shape {
    public $width; // ширина
    public $height; // высота

    function __construct($name, $width, $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }

    public function printRectangleInfo() {
        echo "Rectangle name: ". $this->name. ", width: ". $this->width. ", height: ". $this->height. ", area: ". $this->calculateArea(). "\n";
    }
    
}