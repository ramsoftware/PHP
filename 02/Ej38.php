<?php
//Ciclos anidados
for ($x = 1; $x <= 3; $x++){
	for ($y = 45; $y <= 50; $y++){
		for ($z = 7; $z <= 9; $z++){
			echo $x . ";" . $y . ";" . $z . "<br>";
			if ($z==8) break 2; //Rompe ciclo de $y y $z
		}
	}
}
