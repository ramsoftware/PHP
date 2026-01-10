<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para facultades
require_once("../../persiste/facultades.php");
$objFacultades = new facultades();

$Codigo = abs(intval($_GET["codigo"]));
$objFacultades->Detalle($Codigo);

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/facultades/detalle.html");
$Pantalla = str_replace("{codigo}", $objFacultades->DetalleA['codigo'], $Pantalla);
$Pantalla = str_replace("{nombre}", htmlentities($objFacultades->DetalleA['nombre'], ENT_QUOTES, "UTF-8"), $Pantalla);
echo $Pantalla;