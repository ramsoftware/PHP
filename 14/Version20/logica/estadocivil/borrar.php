<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para estadocivil
require_once("../../persiste/estadocivil.php");
$objEstadoCivil = new estadocivil();

//Borra la foto y el registro
$Codigo = abs(intval($_GET['codigo']));

if ($objEstadoCivil->Borrar($Codigo) == true)
	header("Location:index.php");
else
	echo "Error al borrar color. Código: $Codigo<br>" . $objEstadoCivil->Excepcion;