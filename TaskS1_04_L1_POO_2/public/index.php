<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/Shape.php';
require_once __DIR__ .  '/../src/Triangle.php';
require_once __DIR__ .  '/../src/Rectangle.php';

$rectang1 = new Rectangle(10, 5);
$triang1 = new Triangle(10, 5);

echo "This triangle area is: ". $triang1->area() . "<br>";
echo "This rectangle area is: ". $rectang1->area(); 