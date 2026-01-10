<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Adiciona el registro
$codigo = abs(intval($_GET['codigo']));
$SQL = "INSERT INTO colores(nombre) VALUES(:nombre)";

//Hace la adición
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":nombre", $_POST['nombre']);

try{
	$Sentencia->execute();  //Ejecuta la adición
	$UltimoCodigo = $BaseDatos->Conexion->lastInsertId();
	header("Location:index.php?codigo=$UltimoCodigo");
}
catch (Exception $excepcion) {
	echo "Error al adicionar registro.<br>" . $excepcion->getMessage();
}