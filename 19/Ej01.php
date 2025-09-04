<?php
//Archivos planos. Abre un archivo para escritura
$archivo = fopen("datos.txt", "w");
fwrite($archivo, "Esta es una prueba");
fwrite($archivo, "para escribir datos en");
fwrite($archivo, "un archivo plano.");
fclose($archivo);
echo "Termina";
