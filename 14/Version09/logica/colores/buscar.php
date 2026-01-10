<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

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

//Prepara la búsqueda
$nombre = $_GET['nombre'];
$SQL = "SELECT codigo, nombre FROM colores WHERE nombre LIKE '%$nombre%' ORDER BY nombre LIMIT $Posicion, 10";

$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->execute();  //Ejecuta la consulta
$Registros = $Sentencia->fetchAll();


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
$Pantalla = file_get_contents("../../visual/colores/buscar2.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
$Pantalla = str_replace("{inicio}", "0&nombre=". $_GET['nombre'], $Pantalla);
$Pantalla = str_replace("{anterior}", $PaginaAnterior . "&nombre=". $_GET['nombre'], $Pantalla);
$Pantalla = str_replace("{siguiente}", $PaginaSigue. "&nombre=". $_GET['nombre'], $Pantalla);
echo $Pantalla;