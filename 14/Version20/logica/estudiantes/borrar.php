<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionregistra.php");

//Importa librería de persistencia para estudiantes
require_once("../../persiste/estudiantes.php");
$objEstudiantes = new estudiantes();

//Borra la foto y el registro
$Codigo = abs(intval($_GET['codigo']));

if ($objEstudiantes->Borrar($Codigo) == true)
	header("Location:index.php");
else
	echo "Error al borrar estudiante. Código: $Codigo<br>" . $objEstudiantes->Excepcion;