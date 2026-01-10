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

//Si viene de una adición, muestra el registro adicionado al inicio
if (isset($_GET["codigo"])){
	$Codigo = abs(intval($_GET["codigo"]));
	$SQL = "SELECT codigo, nombre1, apellido1, altura, peso, colorojos, profesion, TIMESTAMPDIFF(YEAR, fechanace, CURDATE()) AS edad FROM estudiantes WHERE codigo = $Codigo
			UNION ALL
			SELECT codigo, nombre1, apellido1, altura, peso, colorojos, profesion, TIMESTAMPDIFF(YEAR, fechanace, CURDATE()) AS edad FROM estudiantes WHERE codigo <> $Codigo
			ORDER BY CASE WHEN codigo = $Codigo THEN 0 ELSE 1 END, nombre1 LIMIT $Posicion, 10";
}
else { //Hace la consulta a la tabla
	$SQL = "SELECT codigo, nombre1, apellido1, altura, peso, colorojos, profesion, TIMESTAMPDIFF(YEAR, fechanace, CURDATE()) AS edad FROM estudiantes ORDER BY nombre1 LIMIT $Posicion, 10";
}

$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->execute();  //Ejecuta la consulta
$Registros = $Sentencia->fetchAll();

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
	$Datos .= "<td>" . htmlentities($Registros[$Fila][7], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= '<td><a href=\'detalle.php?codigo=' . $Codigo . '\' class=\'btn btn-primary\'>Más</a></td>';
	$Datos .= '</tr>';
}

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/estudiantes/index.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
$Pantalla = str_replace("{anterior}", $PaginaAnterior, $Pantalla);
$Pantalla = str_replace("{siguiente}", $PaginaSigue, $Pantalla);
echo $Pantalla;