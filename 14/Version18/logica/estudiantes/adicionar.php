<?php
//Tratamiento de la foto
$Foto = $_FILES['Foto'];
$NombreArchivo = $Foto['name'];
$NombreTemporal = $Foto['tmp_name'];
$Error = $Foto['error'];
if ($Error === UPLOAD_ERR_OK){
    $DirectorioDestino = '../../fotos/' . $NombreArchivo;
    move_uploaded_file($NombreTemporal, $DirectorioDestino);
}

//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Adiciona el registro
$SQL = "INSERT INTO estudiantes(nombre1, nombre2, apellido1, apellido2, tiposangre, altura, peso, colorojos, fechanace, colorprefiere, profesion, nacionalidad, correo, url, celular, estadocivil, ciudadtrabaja, observacion, foto) VALUES(:nombre1, :nombre2, :apellido1, :apellido2, :tiposangre, :altura, :peso, :colorojos, :fechanace, :colorprefiere, :profesion, :nacionalidad, :correo, :url, :celular, :estadocivil, :ciudadtrabaja, :observacion, :foto)";

//Hace la adición
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":nombre1", $_POST['nombre1']);
$Sentencia->bindValue(":nombre2", $_POST['nombre2']);
$Sentencia->bindValue(":apellido1", $_POST['apellido1']);
$Sentencia->bindValue(":apellido2", $_POST['apellido2']);
$Sentencia->bindValue(":tiposangre", $_POST['tiposangre']);
$Sentencia->bindValue(":altura", $_POST['altura']);
$Sentencia->bindValue(":peso", $_POST['peso']);
$Sentencia->bindValue(":colorojos", $_POST['colorojos']);
$Sentencia->bindValue(":fechanace", $_POST['fechanace']);
$Sentencia->bindValue(":colorprefiere", $_POST['colorprefiere']);
$Sentencia->bindValue(":profesion", $_POST['profesion']);
$Sentencia->bindValue(":nacionalidad", $_POST['nacionalidad']);
$Sentencia->bindValue(":correo", $_POST['correo']);
$Sentencia->bindValue(":url", $_POST['url']);
$Sentencia->bindValue(":celular", $_POST['celular']);
$Sentencia->bindValue(":estadocivil", $_POST['estadocivil']);
$Sentencia->bindValue(":ciudadtrabaja", $_POST['ciudadtrabaja']);
$Sentencia->bindValue(":observacion", $_POST['observacion']);
$Sentencia->bindValue(":foto", $DirectorioDestino);
try{
	$Sentencia->execute();  //Ejecuta la adición
	$UltimoCodigo = $BaseDatos->Conexion->lastInsertId();
	header("Location:index.php?codigo=$UltimoCodigo");
}
catch (Exception $excepcion) {
	echo "Error al adicionar registro.<br>" . $excepcion->getMessage();
}