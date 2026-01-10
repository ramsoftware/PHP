<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Borra la foto
$codigo = abs(intval($_GET['codigo']));
$SQL = "SELECT foto FROM estudiantes WHERE codigo = :codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":codigo", $codigo);
$Sentencia->execute();
$registro = $Sentencia->fetch();
unlink($registro[0]); //Borra la foto

//Borra el registro
$SQL = "DELETE FROM estudiantes WHERE codigo = :codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":codigo", $codigo);

try{
	$Sentencia->execute();  //Ejecuta el borrado
	header("Location:index.php");
}
catch (Exception $excepcion) {
	echo "Error al borrar registro.<br>" . $excepcion->getMessage();
}