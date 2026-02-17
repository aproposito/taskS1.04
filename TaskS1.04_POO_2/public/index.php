<!-- Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea amb un mètode. -->

<?php
require_once "../src/Shape.php";
require_once "../src/Triangle.php";
require_once "../src/Rectangle.php";

$rectang1 = new Rectangle(10, 5);
$triang1 = new Triangle(10, 5);

echo "This triangle area is: ". $triang1->area() . "<br>";
echo "This rectangle area is: ". $rectang1->area(); 