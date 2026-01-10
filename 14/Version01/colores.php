<?php
//Conectarse a la base de datos
require_once("BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Hace la consulta a la tabla
$SQL = "SELECT codigo, nombre FROM colores ORDER BY nombre";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->execute();  //Ejecuta la consulta
$Registros = $Sentencia->fetchAll();

//Arma la cadena para mostrar en pantalla
$Datos = "";
for ($Fila=0; $Fila < count($Registros); $Fila++){
	$Datos .= "<tr>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][1], ENT_QUOTES, "UTF-8") . "</td>";
	$Datos .= '<td><a href=\'\' class=\'btn btn-primary\'>Más</a></td>';
	$Datos .= "</tr>";
}

//Respuesta HTML
$Pantalla = file_get_contents("colores.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
echo $Pantalla;