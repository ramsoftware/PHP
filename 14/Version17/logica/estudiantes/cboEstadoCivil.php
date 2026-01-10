<?php
//Importa la librería genérica para bases de datos y la instancia
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();

//Carga codigo y nombre de los estados civiles
$Busca = "";
if (isset($_POST['EstadoCivilBusca'])) $Busca = $_POST['EstadoCivilBusca'];
echo json_encode($BaseDatos->ComboBoxDinamico("estadocivil", "codigo", "nombre", $Busca));
exit();