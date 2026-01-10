<?php
//Importa la librería genérica para bases de datos y la instancia
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();

//Carga codigo y nombre de los colores
$Busca = "";
if (isset($_POST['NacionalidadBusca'])) $Busca = $_POST['NacionalidadBusca'];
echo json_encode($BaseDatos->ComboBoxDinamico("paises", "codigo", "nombre", $Busca));
exit();