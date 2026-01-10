<?php
//Archivos planos. Leyendo el archivo
$archivo = fopen("datos.txt", "r");
while(!feof($archivo)){ //Mientras no encuentre el fin de archivo
	$cadena = fgets($archivo); //Trae la cadena del archivo
	echo $cadena . "<br>";
}
fclose($archivo);
