<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionregistra.php");

//Importa librería de persistencia para estudiantes
require_once("../../persiste/estudiantes.php");
$objEstudiantes = new estudiantes();

if ($objEstudiantes->Adiciona($_POST['nombre1'], $_POST['nombre2'], $_POST['apellido1'], $_POST['apellido2'], $_POST['tiposangre'], $_POST['altura'], $_POST['peso'], $_POST['colorojos'], $_POST['fechanace'], $_POST['colorprefiere'], $_POST['profesion'], $_POST['nacionalidad'], $_POST['correo'], $_POST['url'], $_POST['celular'], $_POST['estadocivil'], $_POST['ciudadtrabaja'], $_POST['observacion']) == true)
	header("Location:index.php?codigo=" . $objEstudiantes->UltimoCodigo);
else
	echo "Error en agregar registro o foto: <br>" + $objEstudiantes->Excepcion;