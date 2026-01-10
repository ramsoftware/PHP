<?php
$NombreBaseDatos = $_GET['db'];

//Conectarse a la base de datos
require_once("BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar($NombreBaseDatos);

$SQL = $BaseDatos->Conexion->query("SHOW TABLES");
$Registros = $SQL->fetchAll(PDO::FETCH_NUM);

//Arma la cadena para mostrar en pantalla
$Datos = "";
for ($Fila=0; $Fila < count($Registros); $Fila++){
    $CualTabla = $Registros[$Fila][0];
    $Datos .= "<tr>";
    $Datos .= "<td>" . htmlentities($Registros[$Fila][0], ENT_QUOTES, "UTF-8") . "</td>";
    $Datos .= "<td><a href='campos.php?db=$NombreBaseDatos&table=$CualTabla' class='btn btn-primary'>Campos</a></td>";
    $Datos .= "</tr>";
}

//Respuesta HTML
$Pantalla = file_get_contents("tablas.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
echo $Pantalla;