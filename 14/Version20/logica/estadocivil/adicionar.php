<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para estadocivil
require_once("../../persiste/estadocivil.php");

$objEstadoCivil = new estadocivil();

if ($objEstadoCivil->Adiciona($_POST['nombre']) == true)
	header("Location:index.php?codigo=" . $objEstadoCivil->UltimoCodigo);
else
	echo "Error en agregar registro o foto: <br>" + $objEstadoCivil->Excepcion;