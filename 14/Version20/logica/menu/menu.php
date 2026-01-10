<?php
//Importa la librería de base de datos para la tabla usuarios
require_once("tabla.php");
$Tabla = new tabla();

//Verifica si las credenciales son correctas
$Resultado = $Tabla->Validar($_POST["identifica"], $_POST["contrasena"]);

//Si las credenciales son correctas
if ($Resultado) {

	//Abre la sesión
	session_name("loginUsuario");
	session_start();

	//Genera las variables de sesión
	$_SESSION['usuarionombre'] = $Tabla->UsuarioNombre;
	$_SESSION['rolcodigo'] = $Tabla->RolCodigo;

	//Dependiendo del tipo de usuario lo redirige a un determinado menú
	switch($Tabla->RolCodigo){
		case 0: header("Location:basica.php"); break;
		case 1: header("Location:registra.php"); break;
	}
}
else { //Retorna a la pantalla de inicio de sesión para mostrar el error de identificación al usuario
	header("Location:../../index.php?iniciar=0");
}

