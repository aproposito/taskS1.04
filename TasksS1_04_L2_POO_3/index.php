<!-- //Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Ha de tenir un mètode que no faci altra cosa que tirar el dau.
Crea també altre mètode que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
Després, amplia el programa per a poder tirar cinc daus de pòquer alhora.
A més, volem que la classe PokerDice tingui un mètode que ens permeti veure la quantitat de tirades de TOTS els daus.
Propiedades de un dado: un array de seis strings [As, K, Q, J, 7 i 8]
Metodo: tirar el dado (escoger de forma aleatoria entre las caras)
Método para tirar un array de 5 dados a la vez
Método: Guardar la cara escogida al azar del dado sobre el que se aplica el método
Método que permite ver las tiradas de todos los dados// -->

<?php
require_once("./PokerDice.php");

$dice1 = new PokerDice();
$dice2 = new PokerDice();
$dice3 = new PokerDice();
$dice4 = new PokerDice();
$dice5 = new PokerDice();
$dice6 = new PokerDice();

$dice1->roll();
echo $dice1->getLastFace() . "<br>";

$dice2->roll();
echo $dice2->getLastFace() . "<br>";

$dice3->roll();
echo $dice3->getLastFace() . "<br>";

$dice4->roll();
echo $dice4->getLastFace() . "<br>";

$dice5->roll();
echo $dice5->getLastFace() . "<br>";

$dice6->roll();
echo $dice6->getLastFace() . "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo PokerDice::getTotalRoll();

