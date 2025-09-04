<?php
//Operaciones de bit
$valA = 25;
$valB = 20;
echo $valA . " en binario es: " . decbin($valA) . "<br>";
echo $valB . " en binario es: " . decbin($valB) . "<br>";

$valC = $valA | $valB; //Operación OR
echo $valC . " en binario es: " . decbin($valC) . "<br>";
