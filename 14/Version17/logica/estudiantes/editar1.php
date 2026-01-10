<?php
//Tratamiento de la foto
$DirectorioDestino = $_POST['fotoantigua'];
if (isset($_FILES['Foto'])){ //Si subió una foto nueva
	$Foto = $_FILES['Foto'];
	$NombreArchivo = $Foto['name'];
	$NombreTemporal = $Foto['tmp_name'];
	$Error = $Foto['error'];
	if ($Error === UPLOAD_ERR_OK){
		$DirectorioDestino = '../../fotos/' . $NombreArchivo;
		move_uploaded_file($NombreTemporal, $DirectorioDestino);
		unlink($_POST['fotoantigua']); //Borra la foto anterior
	}
}

//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Genera la instrucción de actualización
$SQL = "UPDATE estudiantes SET
nombre1 = :nombre1,
nombre2 = :nombre2,
apellido1 = :apellido1,
apellido2 = :apellido2,
tiposangre = :tiposangre,
altura = :altura,
peso = :peso,
colorojos = :colorojos,
fechanace = :fechanace,
colorprefiere = :colorprefiere,
profesion = :profesion,
nacionalidad = :nacionalidad,
correo = :correo,
url = :url,
celular = :celular,
estadocivil = :estadocivil,
ciudadtrabaja = :ciudadtrabaja, 
observacion = :observacion,
foto = :foto
WHERE codigo = :codigo";

//Los valores traídos del formulario
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Codigo = $_POST['codigo'];
$Sentencia->bindValue(":codigo", $Codigo);
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
	$Sentencia->execute();  //Ejecuta la actualización
	header("Location:index.php?codigo=$Codigo");
}
catch (Exception $excepcion) {
	echo "Error al actualizar registro.<br>" . $excepcion->getMessage();
}
