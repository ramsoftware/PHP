<?php
//Importa la librería genérica para bases de datos y la instancia
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();

//Carga codigo y nombre de los tipos de sangre
$Busca = "";
if (isset($_POST['TipoSangreBusca'])) $Busca = $_POST['TipoSangreBusca'];
echo json_encode($BaseDatos->ComboBoxDinamico("tiposangre", "codigo", "nombre", $Busca));
exit();