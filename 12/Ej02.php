<?php
$tablero = array(
					array(902, 178, 347),
					array(782, 490, 111),
					array(213, 887, 147),
					array(553, 673, 821)
				);

//Recorrido es:
for ($fila=0; $fila<count($tablero); $fila++){
	echo "<br>";
	for ($columna=0; $columna<count($tablero[$fila]); $columna++)
		echo $tablero[$fila][$columna] . ', ';
}
