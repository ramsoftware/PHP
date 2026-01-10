<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para colores
require_once("../../persiste/colores.php");

$objColores = new colores();

if ($objColores->Adiciona($_POST['nombre']) == true)
	header("Location:index.php?codigo=" . $objColores->UltimoCodigo);
else
	echo "Error en agregar registro o foto: <br>" + $objColores->Excepcion;