<?php
//Es bidimensional pero con diferente número de columnas
$tablero = array(
					array(902, 178, 347),
					array(782, 490, 111, 512, 775, 231),
					array(213, 887, 147),
					array(553, 673, 821, 489)
				);

//Recorrido es:
for ($fila=0; $fila<count($tablero); $fila++){
	echo "<br>";
	for ($columna=0; $columna<count($tablero[$fila]); $columna++)
		echo $tablero[$fila][$columna] . ', ';
}
