<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionbasica.php");

//Importa librería de persistencia para facultades
require_once("../../persiste/facultades.php");
$objFacultades = new facultades();

//Posición en la tabla
if (isset($_GET["pos"]))
	$Posicion = abs(intval($_GET["pos"]));
else
	$Posicion = 0;

//Paginación
if ($Posicion > 10)
	$PaginaAnterior =  $Posicion - 10;
else
	$PaginaAnterior =  0;

$PaginaSigue = $Posicion + 10;

//Si viene de una adición o edición, muestra el registro adicionado/editado al inicio
if (isset($_GET["codigo"])){
	$Codigo = abs(intval($_GET["codigo"]));
	$Registros = $objFacultades->Grid($Codigo, true, $Posicion);
}
else 
	$Registros = $objFacultades->Grid(-1, false, $Posicion);

//Arma la cadena para mostrar en pantalla, añade el código al botón Más
$Datos = "";
for ($Fila=0; $Fila < count($Registros); $Fila++){
	$Codigo = $Registros[$Fila][0];
	$Datos .= "<tr>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][1], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= '<td><a href=\'detalle.php?codigo=' . $Codigo . '\' class=\'btn btn-primary\'>Más</a></td>';
	$Datos .= '</tr>';
}

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/facultades/index.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
$Pantalla = str_replace("{anterior}", $PaginaAnterior, $Pantalla);
$Pantalla = str_replace("{siguiente}", $PaginaSigue, $Pantalla);
echo $Pantalla;