<?php
declare(strict_types=1);

class Employee{

public function __construct(
    private string $name,
    private float $salary,
){
$this->name = trim($name);
if($salary < 0 ){
    throw new Exception ("Salary but it must be positive, enter a valid salary");
}
}

public function getNameTaxes (){
   echo "Nombre: ". $this->name . " tiene un sueldo de: " . $this->salary . " y por tanto... " . PHP_EOL;
   if ($this->salary > 6000){ echo "Paga impuestos.";}
   else { echo "No paga impuestos.";}

}
}
