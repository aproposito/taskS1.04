<?php
declare(strict_types=1);

class Rectangle extends Shape {

public function area() : float {
    return $this->getHeight() * $this->getWidth();
}

    }