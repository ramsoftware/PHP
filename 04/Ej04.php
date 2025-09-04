<?php
//Uso de eval como evaluador de expresiones algebraicas
$a=3;
$b=5;
$c=2;
$d=7;
$expresion = "return " . $a . "+" . $b . "-" . $c . "*" . $d . ";"; 
$valor = eval($expresion);
echo $valor;
