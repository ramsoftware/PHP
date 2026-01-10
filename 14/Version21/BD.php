<?php
//=======================================
//Una clase que manejará la base de datos
//======================================= 
class basedatos{
	public $Servidor = "mysql:host=localhost";
	public $Sesion = "root";
	public $Contrasena = "";

	public $Conexion; //Mantiene la conexión con la base de datos

	public function Conectar($Instancia){
		if (isset($this->Conexion)) return true; //Si ya está definida la conexión
		try {
			//Usando PDO (PHP Data Objects) para conectarse.
            $opciones = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];
            if ($Instancia != '')
                $this->Servidor .= ';dbname=' . $Instancia;
            $this->Conexion = new PDO($this->Servidor, $this->Sesion, $this->Contrasena, $opciones);
		} catch (PDOException $UnError){
			echo $UnError->getMessage();
			return false;
		}
		return true;
	}
}