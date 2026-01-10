<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Hace la consulta a la tabla de ese registro en particular
$codigo = abs(intval($_GET["codigo"]));
$SQL = "SELECT codigo, nombre FROM colores WHERE codigo = :codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":codigo", $codigo);
$Sentencia->execute();  //Ejecuta la consulta
$registro = $Sentencia->fetch();

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/colores/detalle.html");
$Pantalla = str_replace("{codigo}", $registro['codigo'], $Pantalla);
$Pantalla = str_replace("{nombre}", htmlentities($registro['nombre'], ENT_QUOTES, "UTF-8"), $Pantalla);
echo $Pantalla;
