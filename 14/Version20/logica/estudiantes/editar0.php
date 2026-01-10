<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionregistra.php");

//Importa librería de persistencia para estudiantes
require_once("../../persiste/estudiantes.php");
$objEstudiante = new estudiantes();

$Codigo = abs(intval($_GET["codigo"]));
$objEstudiante->EditaMuestra($Codigo);

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/estudiantes/editar.html");
$Pantalla = str_replace("{codigo}", $objEstudiante->DetalleA['codigo'], $Pantalla);
$Pantalla = str_replace("{nombre1}", htmlentities($objEstudiante->DetalleA['nombre1'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{nombre2}", htmlentities($objEstudiante->DetalleA['nombre2'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{apellido1}", htmlentities($objEstudiante->DetalleA['apellido1'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{apellido2}", htmlentities($objEstudiante->DetalleA['apellido2'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{tiposangre}", $objEstudiante->DetalleA['tiposangre'], $Pantalla);
$Pantalla = str_replace("{altura}", $objEstudiante->DetalleA['altura'], $Pantalla);
$Pantalla = str_replace("{peso}", $objEstudiante->DetalleA['peso'], $Pantalla);
$Pantalla = str_replace("{colorojos}", $objEstudiante->DetalleA['colorojos'], $Pantalla);
$Pantalla = str_replace("{fechanace}", $objEstudiante->DetalleA['fecha'], $Pantalla);
$Pantalla = str_replace("{colorprefiere}", $objEstudiante->DetalleA['colorprefiere'], $Pantalla);
$Pantalla = str_replace("{profesion}", $objEstudiante->DetalleA['profesion'], $Pantalla);
$Pantalla = str_replace("{nacionalidad}", $objEstudiante->DetalleA['nacionalidad'], $Pantalla);
$Pantalla = str_replace("{correo}", htmlentities($objEstudiante->DetalleA['correo'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{url}", htmlentities($objEstudiante->DetalleA['url'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{celular}", $objEstudiante->DetalleA['celular'], $Pantalla);
$Pantalla = str_replace("{estadocivil}", $objEstudiante->DetalleA['estadocivil'], $Pantalla);
$Pantalla = str_replace("{paistrabaja}", $objEstudiante->DetalleB['paistrabaja'], $Pantalla);
$Pantalla = str_replace("{ciudadtrabaja}", $objEstudiante->DetalleA['ciudadtrabaja'], $Pantalla);
$Pantalla = str_replace("{observacion}", $objEstudiante->DetalleA['observacion'], $Pantalla); //htmlentities (?)
$Pantalla = str_replace("{fotoantigua}", $objEstudiante->DetalleA['foto'], $Pantalla); //htmlentities (?)
echo $Pantalla;