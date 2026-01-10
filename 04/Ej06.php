<?php 
//Crea el arreglo
$lenguajes = array("C++");

//Adiciona elementos con array_push
array_push($lenguajes, "C#");
array_push($lenguajes, "Visual Basic .Net", "PHP", "JavaScript");
array_push($lenguajes, "Object Pascal");

//Recorre el arreglo
foreach ($lenguajes as $valor){
	echo $valor . ", ";
}
