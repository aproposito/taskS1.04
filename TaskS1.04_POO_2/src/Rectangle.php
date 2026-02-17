<?php
class Rectangle extends Shape {
    public function __construct(float $height, float $width){
         parent:: __construct($height, $width);
    }
public function area() : float {
    return $this->getHeight() * $this->getWidth();
}

    }