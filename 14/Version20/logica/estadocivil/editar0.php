<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para estadocivil
require_once("../../persiste/estadocivil.php");
$objEstadoCivil = new estadocivil();

$Codigo = abs(intval($_GET["codigo"]));
$objEstadoCivil->EditaMuestra($Codigo);

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/estadocivil/editar.html");
$Pantalla = str_replace("{codigo}", $objEstadoCivil->DetalleA['codigo'], $Pantalla);
$Pantalla = str_replace("{nombre}", htmlentities($objEstadoCivil->DetalleA['nombre'], ENT_QUOTES, "UTF-8"), $Pantalla);
echo $Pantalla;