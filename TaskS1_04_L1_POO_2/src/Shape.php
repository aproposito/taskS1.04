<?php
// Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode.

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
