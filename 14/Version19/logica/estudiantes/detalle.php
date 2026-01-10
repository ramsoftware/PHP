<?php
require_once("../../persiste/estudiantes.php");

$objEstudiante = new estudiantes();
$Codigo = abs(intval($_GET["codigo"]));
$objEstudiante->Detalle($Codigo);

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/estudiantes/detalle.html");
$Pantalla = str_replace("{codigo}", $objEstudiante->DetalleA['codigo'], $Pantalla);
$Pantalla = str_replace("{nombre1}", htmlentities($objEstudiante->DetalleA['nombre1'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{nombre2}", htmlentities($objEstudiante->DetalleA['nombre2'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{apellido1}", htmlentities($objEstudiante->DetalleA['apellido1'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{apellido2}", htmlentities($objEstudiante->DetalleA['apellido2'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{tiposangre}", $objEstudiante->DetalleA['tiposangre'], $Pantalla);
$Pantalla = str_replace("{altura}", $objEstudiante->DetalleA['altura'], $Pantalla);
$Pantalla = str_replace("{peso}", $objEstudiante->DetalleA['peso'], $Pantalla);
$Pantalla = str_replace("{colorojos}", $objEstudiante->DetalleA['nombrecolorojos'], $Pantalla);
$Pantalla = str_replace("{fechanace}", $objEstudiante->DetalleA['fecha'], $Pantalla);
$Pantalla = str_replace("{colorprefiere}", $objEstudiante->DetalleA['nombrecolorprefiere'], $Pantalla);
$Pantalla = str_replace("{profesion}", $objEstudiante->DetalleA['profesion'], $Pantalla);
$Pantalla = str_replace("{nacionalidad}", $objEstudiante->DetalleA['nacionalidad'], $Pantalla);
$Pantalla = str_replace("{correo}", htmlentities($objEstudiante->DetalleA['correo'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{url}", htmlentities($objEstudiante->DetalleA['URL'], ENT_QUOTES, "UTF-8"), $Pantalla);
$Pantalla = str_replace("{celular}", $objEstudiante->DetalleA['celular'], $Pantalla);
$Pantalla = str_replace("{estadocivil}", $objEstudiante->DetalleA['estadocivil'], $Pantalla);
$Pantalla = str_replace("{ciudadtrabaja}", $objEstudiante->DetalleA['ciudadtrabaja'], $Pantalla);
$Pantalla = str_replace("{observacion}", $objEstudiante->DetalleA['observacion'], $Pantalla); //htmlentities (?)
$Pantalla = str_replace("{foto}", "<img src='" . $objEstudiante->DetalleA['foto']. "'></img>", $Pantalla); //htmlentities (?)
$Pantalla = str_replace("{paistrabaja}", $objEstudiante->DetalleB['nombrepais'], $Pantalla);
echo $Pantalla;