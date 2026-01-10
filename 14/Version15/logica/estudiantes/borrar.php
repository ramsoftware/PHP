<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Borra el registro
$codigo = abs(intval($_GET['codigo']));
$SQL = "DELETE FROM estudiantes WHERE codigo = :codigo";

//Hace el borrado
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":codigo", $codigo);

try{
	$Sentencia->execute();  //Ejecuta el borrado
	header("Location:index.php");
}
catch (Exception $excepcion) {
	echo "Error al borrar registro.<br>" . $excepcion->getMessage();
}