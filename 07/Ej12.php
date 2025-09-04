<?php 
//Crea el arreglo
$lenguajes = array("C++");

//Adiciona elementos con array_push
array_push($lenguajes, "C#");
array_push($lenguajes, "Visual Basic .Net", "PHP", "JavaScript");
array_push($lenguajes, "Object Pascal");

sort($lenguajes);

for ($cont=0; $cont < count($lenguajes); $cont++){
	echo $lenguajes[$cont] . ", ";
}
