<?php
//Conectarse a la base de datos
require_once("BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar("");

$SQL = $BaseDatos->Conexion->query("SHOW DATABASES");
$Registros = $SQL->fetchAll(PDO::FETCH_NUM);

//Arma la cadena para mostrar en pantalla
$Datos = "";
for ($Fila=0; $Fila < count($Registros); $Fila++){
    $CualBase = $Registros[$Fila][0];
    $Datos .= "<tr>";
    $Datos .= "<td>" . htmlentities($Registros[$Fila][0], ENT_QUOTES, "UTF-8") . "</td>";
    $Datos .= "<td><a href='tablas.php?db=$CualBase' class='btn btn-primary'>Tablas</a></td>";
    $Datos .= "</tr>";
}

//Respuesta HTML
$Pantalla = file_get_contents("index.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
echo $Pantalla;