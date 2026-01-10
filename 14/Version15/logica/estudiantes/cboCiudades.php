<?php
//Importa la librería genérica para bases de datos y la instancia
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();

//Carga codigo y nombre de las ciudades
$Busca = "";
if (isset($_POST['CiudadBusca'])) $Busca = $_POST['CiudadBusca'];
echo json_encode($BaseDatos->ComboBoxDinamico("ciudades", "codigo", "nombre", $Busca));
exit();