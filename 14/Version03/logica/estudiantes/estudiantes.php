<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Posición en la tabla
if (isset($_GET["PosTabla"]))
	$Posicion = abs(intval($_GET["PosTabla"]));
else
	$Posicion = 0;

//Paginación
if ($Posicion > 10)
	$PaginaAnterior =  $Posicion - 10;
else
	$PaginaAnterior =  0;

$PaginaSigue = $Posicion + 10;

//Hace la consulta a la tabla
$SQL = "SELECT 
  CONCAT(nombre1, ' ', nombre2, ' ', apellido1, ' ', apellido2)
   AS nombre_completo,
  ROUND(peso / (altura * altura), 2) AS imc
FROM estudiantes LIMIT $Posicion, 10";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->execute();  //Ejecuta la consulta
$Registros = $Sentencia->fetchAll();

//Arma la cadena para mostrar en pantalla
$Datos = "";
for ($Fila=0; $Fila < count($Registros); $Fila++){
	$Datos .= "<tr>";
	$Datos .= "<td>" . htmlentities($Registros[$Fila][0], ENT_QUOTES, "UTF-8") . "</td>";
	if ($Registros[$Fila][1] < 18.5 || $Registros[$Fila][1] > 24.9){
		$Datos .= "<td><span style='color: red;'>" . htmlentities($Registros[$Fila][1], ENT_QUOTES, "UTF-8") . "</span></td>";
	}
	else {
		$Datos .= "<td>" . htmlentities($Registros[$Fila][1], ENT_QUOTES, "UTF-8") . "</td>";
	}
	$Datos .= '<td><a href=\'\' class=\'btn btn-primary\'>Más</a></td>';
	$Datos .= '</tr>';
}

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/estudiantes/estudiantes.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
$Pantalla = str_replace("{anterior}", $PaginaAnterior, $Pantalla);
$Pantalla = str_replace("{siguiente}", $PaginaSigue, $Pantalla);
echo $Pantalla;