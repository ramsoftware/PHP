<?php
//Archivos planos. Abre un archivo para escritura
$archivo = fopen("datos.txt", "a");
fwrite($archivo, "Añade líneas al archivo" . PHP_EOL);
fwrite($archivo, "plano y no borra los" . PHP_EOL);
fwrite($archivo, "datos que estaban antes." . PHP_EOL);
fclose($archivo);
echo "Fin";
