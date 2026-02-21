<?php
declare(strict_types=1);

require_once __DIR__ . '/Employee.php';

$employee1 = new Employee("Rubén Pérez", 150000);
//$employee2 = new Employee("Alberto Ortiz", -5000);
$employee3 = new Employee("Julian Miga", 5000);

$employee1 -> getNameTaxes(); 
echo "<br>";

$employee3-> getNameTaxes(); 
echo "<br>";

?>
