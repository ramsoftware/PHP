<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para facultades
require_once("../../persiste/facultades.php");
$objFacultades = new facultades();

$Codigo = abs(intval($_POST['codigo']));

if ($objFacultades->EditaGuarda($Codigo, $_POST['nombre']) == true)
	header("Location:index.php?codigo=" . $Codigo);
else
	echo "Error en editar registro: <br>" . $objFacultades->Excepcion;