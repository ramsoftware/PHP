<?php
//=======================================
//Una clase que manejará la base de datos
//======================================= 
class basedatos{
	public $Servidor = "mysql:host=localhost";
	public $Sesion = "root";
	public $Contrasena = "";
	public $Instancia = "educar";
	
	public $Conexion; //Mantiene la conexión con la base de datos

	public function Conectar(){
		if (isset($this->Conexion)) return true; //Si ya está definida la conexión
		try {
			//Usando PDO (PHP Data Objects) para conectarse.
			$this->Conexion = new PDO($this->Servidor.";dbname=".$this->Instancia, $this->Sesion, $this->Contrasena, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$this->Conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $UnError){
			echo $UnError->getMessage();
			return false;
		}
		return true;
	}
}