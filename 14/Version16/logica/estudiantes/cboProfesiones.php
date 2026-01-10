<?php
//Importa la librería genérica para bases de datos y la instancia
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();

//Carga codigo y nombre de las profesiones
$Busca = "";
if (isset($_POST['ProfesionesBusca'])) $Busca = $_POST['ProfesionesBusca'];
echo json_encode($BaseDatos->ComboBoxDinamico("profesiones", "codigo", "nombre", $Busca));
exit();