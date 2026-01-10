<?php
require_once("BD.php");

class facultades{
	public $UltimoCodigo; //Al adicionar, se obtiene el código de ese registro
	public $Excepcion; //Almacena el texto de error en caso de fallo
	public $DetalleA; //Campos de la tabla facultades

	//Adiciona registro a BD 
	public function Adiciona($nombre){
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();

		//Adiciona el registro
		$SQL = "INSERT INTO facultades(nombre) VALUES(:nombre)";

		//Hace la adición
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":nombre", $nombre);
		try{
			$Sentencia->execute();  //Ejecuta la adición
			$this->UltimoCodigo = $BaseDatos->Conexion->lastInsertId();
			return true;
		}
		catch (Exception $excepcion) {
			$this->Excepcion = $excepcion->getMessage();
			return false;
		}
	}
	
	//Borra el registro
	public function Borrar($Codigo){
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();
		
		//Borra el registro
		$SQL = "DELETE FROM facultades WHERE codigo = :codigo";
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":codigo", $Codigo);
		
		try{
			$Sentencia->execute();  //Ejecuta la adición
			return true;
		}
		catch (Exception $excepcion) {
			$this->Excepcion = $excepcion->getMessage();
			return false;
		}
	}
	
	//Trae el detalle del estudiante
	public function Detalle($Codigo){
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();
		
		$SQL = "SELECT codigo, nombre FROM facultades WHERE codigo = :codigo";

		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":codigo", $Codigo);
		$Sentencia->execute();  //Ejecuta la consulta
		$this->DetalleA = $Sentencia->fetch();
	}
	
	//Edita el estudiante. Muestra los valores existentes.
	public function EditaMuestra($Codigo){
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();
		
		$SQL = "SELECT codigo, nombre FROM facultades WHERE codigo = :codigo";
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":codigo", $Codigo);
		$Sentencia->execute();  //Ejecuta la consulta
		$this->DetalleA = $Sentencia->fetch();
	}
	
	//Guarda el registro editado
	public function EditaGuarda($codigo, $nombre){
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();
		
		//Genera la instrucción de actualización
		$SQL = "UPDATE facultades SET nombre = :nombre WHERE codigo = :codigo";

		//Los valores traídos del formulario
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":codigo", $codigo);
		$Sentencia->bindValue(":nombre", $nombre);
		try{
			$Sentencia->execute();  //Ejecuta la edición
			return true;
		}
		catch (Exception $excepcion) {
			$this->Excepcion = $excepcion->getMessage();
			return false;
		}
	}
	
	//Lectura de registros, mostrados en un grid
	public function Grid($Codigo, $Iniciar, $Posicion){
		
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();
	
		if($Iniciar==true){
			$SQL = "SELECT codigo, nombre FROM Facultades WHERE codigo = $Codigo
			UNION ALL
			SELECT codigo, nombre FROM Facultades WHERE codigo <> $Codigo
			ORDER BY CASE WHEN codigo = $Codigo THEN 0 ELSE 1 END, nombre LIMIT $Posicion, 10";
		}
		else {
			$SQL = "SELECT codigo, nombre FROM facultades ORDER BY nombre LIMIT $Posicion, 10";
		}
		
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->execute();  //Ejecuta la consulta
		$Registros = $Sentencia->fetchAll();
		return $Registros;
	}
}