<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para estadocivil
require_once("../../persiste/estadocivil.php");
$objEstadoCivil = new estadocivil();

$Codigo = abs(intval($_POST['codigo']));

if ($objEstadoCivil->EditaGuarda($Codigo, $_POST['nombre']) == true)
	header("Location:index.php?codigo=" . $Codigo);
else
	echo "Error en editar registro: <br>" . $objEstadoCivil->Excepcion;