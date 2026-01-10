<?php
//Importa la librería genérica para bases de datos y la instancia
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();

//Carga codigo y nombre de las ciudades
$Busca = "";
$PaisBuscado = $_POST['PaisBuscado'];
if (isset($_POST['CiudadBusca']))
	$Busca = $_POST['CiudadBusca'];

echo json_encode($BaseDatos->ComboBoxDinamico2("ciudades", "codigo", "nombre", "pais", $PaisBuscado, $Busca));
exit();