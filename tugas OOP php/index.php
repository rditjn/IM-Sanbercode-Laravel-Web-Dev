<?php
require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
echo "Name : " . $sheep->name . "\n";
echo "legs : " . $sheep->legs . "\n";
echo "cold blooded : " . $sheep->cold_blooded . "\n\n";

$kodok = new Frog("buduk");
echo "Name : " . $kodok->name . "\n";
echo "legs : " . $kodok->legs . "\n";
echo "cold blooded : " . $kodok->cold_blooded . "\n";
echo "Jump : ";
$kodok->jump();
echo "\n";

$sungokong = new Ape("kera sakti");
echo "Name : " . $sungokong->name . "\n";
echo "legs : " . $sungokong->legs . "\n";
echo "cold blooded : " . $sungokong->cold_blooded . "\n";
echo "Yell : ";
$sungokong->yell();
?>
