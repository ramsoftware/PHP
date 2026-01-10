<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Hace la consulta a la tabla de ese registro en particular
$SQL = "UPDATE colores SET nombre = :nombre WHERE codigo = :codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Codigo = $_POST['codigo'];
$Sentencia->bindValue(":codigo", $Codigo);
$Sentencia->bindValue(":nombre", $_POST['nombre']);

try{
	$Sentencia->execute();  //Ejecuta la actualización
	header("Location:index.php?codigo=$Codigo");
}
catch (Exception $excepcion) {
	echo "Error al actualizar registro.<br>" . $excepcion->getMessage();
}
