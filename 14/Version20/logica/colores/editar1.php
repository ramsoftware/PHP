<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para colores
require_once("../../persiste/colores.php");

$objColores = new colores();

$Codigo = abs(intval($_POST['codigo']));

if ($objColores->EditaGuarda($Codigo, $_POST['nombre']) == true)
	header("Location:index.php?codigo=" . $Codigo);
else
	echo "Error en editar registro: <br>" . $objColores->Excepcion;