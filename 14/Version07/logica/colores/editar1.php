<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Hace la consulta a la tabla de ese registro en particular
$SQL = "UPDATE colores SET nombre = :nombre WHERE codigo = :codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":codigo", $_POST['codigo']);
$Sentencia->bindValue(":nombre", $_POST['nombre']);

try{
	$Sentencia->execute();  //Ejecuta la actualización
	header("Location:colores.php");
}
catch (Exception $excepcion) {
	echo "Error al actualizar registro.<br>" . $excepcion->getMessage();
}
