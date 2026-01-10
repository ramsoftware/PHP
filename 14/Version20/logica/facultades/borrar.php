<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para facultades
require_once("../../persiste/facultades.php");
$objFacultades = new facultades();

//Borra la foto y el registro
$Codigo = abs(intval($_GET['codigo']));

if ($objFacultades->Borrar($Codigo) == true)
	header("Location:index.php");
else
	echo "Error al borrar color. Código: $Codigo<br>" . $objFacultades->Excepcion;