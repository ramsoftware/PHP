<?php
//Función que captura el error matemático
function Captura_Error($NumeroError, $Mensaje){
	throw new Exception($Mensaje);
}

//Esa función se matricula
set_error_handler('Captura_Error');

//Hace una división entre cero
try {
	$resultado = 4 / 0;
	echo $resultado;
}
catch(Exception $e ){
	echo "División entre cero<br>";
}
