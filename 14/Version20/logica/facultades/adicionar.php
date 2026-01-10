<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para facultades
require_once("../../persiste/facultades.php");

$objFacultades = new facultades();

if ($objFacultades->Adiciona($_POST['nombre']) == true)
	header("Location:index.php?codigo=" . $objFacultades->UltimoCodigo);
else
	echo "Error en agregar registro o foto: <br>" + $objFacultades->Excepcion;