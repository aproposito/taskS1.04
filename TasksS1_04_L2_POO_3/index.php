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
