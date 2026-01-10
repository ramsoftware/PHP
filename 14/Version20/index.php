<?php
$FallaInicio = "";
if (isset($_GET["iniciar"]))
	if ($_GET["iniciar"]=='0')
		$FallaInicio = "Identificación o contraseña inválidos";

//Respuesta HTML
$Pantalla = file_get_contents("./visual/iniciar.html");
$Pantalla = str_replace("{FallaInicio}", $FallaInicio, $Pantalla);
echo $Pantalla;
