<?php
//Importa librería de persistencia para colores
require_once("../../persiste/colores.php");

$objColores = new colores();
$Codigo = abs(intval($_GET["codigo"]));
$objColores->Detalle($Codigo);

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/colores/detalle.html");
$Pantalla = str_replace("{codigo}", $objColores->DetalleA['codigo'], $Pantalla);
$Pantalla = str_replace("{nombre}", htmlentities($objColores->DetalleA['nombre'], ENT_QUOTES, "UTF-8"), $Pantalla);
echo $Pantalla;