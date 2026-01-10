<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionregistra.php");

//Importa librería de persistencia para estudiantes
require_once("../../persiste/estudiantes.php");
$objEstudiantes = new estudiantes();

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
	$Registros = $objEstudiantes->Grid($Codigo, true, $Posicion);
}
else 
	$Registros = $objEstudiantes->Grid(-1, false, $Posicion);

//Arma la cadena para mostrar en pantalla, añade el código al botón Más
$Datos = "";
for ($Fila=0; $Fila < count($Registros); $Fila++){
	$Codigo = $Registros[$Fila][0];
	$Datos .= "<tr>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][1], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][2], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][3], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][4], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][5], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][6], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= '<td><a href=\'detalle.php?codigo=' . $Codigo . '\' class=\'btn btn-primary\'>Más</a></td>';
	$Datos .= '</tr>';
}

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/estudiantes/index.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
$Pantalla = str_replace("{anterior}", $PaginaAnterior, $Pantalla);
$Pantalla = str_replace("{siguiente}", $PaginaSigue, $Pantalla);
echo $Pantalla;