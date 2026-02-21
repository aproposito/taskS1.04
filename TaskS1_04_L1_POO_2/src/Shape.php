<?php
declare(strict_types=1);

abstract class Shape
{
    private float $height;
    private float $width;
    public function __construct(float $height, float $width)
    {
        if ($height <= 0) {
            throw new InvalidArgumentException("Height must be positive");
        }
        $this->height = $height;
        if ($width <= 0) {
            throw new InvalidArgumentException("Width must be positive");
        }
        $this->width = $width;
    }
abstract public function area() : float;

public function getHeight(): float {
    return $this->height;
}
public function getWidth(): float{
    return $this->width;
}    
}
