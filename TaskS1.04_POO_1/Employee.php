<?php
// Crea una classe que representi un empleat, amb atributs referits al seu nom i sou. Defineix un mètode que rebi com a paràmetres el nom i el sou. Planteja un segon mètode que imprimeixi el nom i un missatge que mostri si ha de pagar o no impostos (si el sou en supera 6000, paga impostos).

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
    echo "Nombre: ". $this->name . " tiene un sueldo de: " . $this->salary . " y por tanto...  <br>";
    if ($this->salary > 6000){ echo "Paga impuestos.";}
    else { echo "No paga impuestos.";}

}

}