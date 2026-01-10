<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para colores
require_once("../../persiste/colores.php");

$objColores = new colores();

//Borra la foto y el registro
$Codigo = abs(intval($_GET['codigo']));

if ($objColores->Borrar($Codigo) == true)
	header("Location:index.php");
else
	echo "Error al borrar color. Código: $Codigo<br>" . $objColores->Excepcion;