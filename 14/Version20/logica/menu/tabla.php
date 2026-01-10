<?php
//========================================
//Una clase que manejará la tabla usuarios
//========================================
require_once("../../persiste/BD.php");

class tabla{
	//Mantiene la conexión activa
	public $BaseDatos;

	//Tiene la identificación
	public $UsuarioNombre;

	//Tiene el rol
	public $RolCodigo;

	//Conecta a la base de datos
	public function __construct(){
		$this->BaseDatos = new basedatos();
		$this->BaseDatos->Conectar();
	}
	
	//Crear el SQL de validación de existencia del usuario
	public function Validar($Identifica, $Contrasena){
		$PuedeEntrar = false;
		
		$SQL = "SELECT contrasena, rol, nombre FROM usuarios WHERE identifica = :identifica";
		echo $SQL . "<br> Usuario: " . $Identifica . " clave: " . $Contrasena . "Cifrada = " . hash('sha512', $Contrasena);
		
		$Sentencia = $this->BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":identifica", $Identifica);
		$Sentencia->execute();  //Ejecuta la consulta
		$Registros = $Sentencia->fetch();
		
		if($Registros[0] == hash('sha512', $Contrasena)) {
			$PuedeEntrar = true;
			$this->RolCodigo = $Registros[1];
			$this->UsuarioNombre = $Registros[2];
		}
		return $PuedeEntrar;
	}
}