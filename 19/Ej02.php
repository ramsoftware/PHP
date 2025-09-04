<?php
//Archivos planos. Abre un archivo para escritura y aplica saltos de línea
$archivo = fopen("datos.txt", "w");
fwrite($archivo, "Esta es una prueba" . PHP_EOL);
fwrite($archivo, "para escribir datos en" . PHP_EOL);
fwrite($archivo, "un archivo plano." . PHP_EOL);
fclose($archivo);
echo "Finaliza";
