<?php
require_once("BD.php");

class estudiantes{
	private $directoriofotos = '../../fotos/'; //Donde se guardan las fotos
	
	public $UltimoCodigo; //Al adicionar, se obtiene el código de ese registro
	public $Excepcion; //Almacena el texto de error en caso de fallo
	public $DetalleA; //Campos de la tabla estudiantes
	public $DetalleB; //Nombre del pais donde trabaja el estudiante
	
	//Adiciona registro a BD y foto dado el caso
	public function Adiciona($nombre1, $nombre2, $apellido1, $apellido2, $tiposangre, $altura, $peso, $colorojos, $fechanace, $colorprefiere, $profesion, $nacionalidad, $correo, $url, $celular, $estadocivil, $ciudadtrabaja, $observacion){
		
		//Sube la foto al servidor de archivos 
		$URLFoto = "";
		if ($_FILES['Foto']['size'] != 0){
			$Foto = $_FILES['Foto'];
			$NombreArchivo = $Foto['name'];
			$NombreTemporal = $Foto['tmp_name'];
			$Error = $Foto['error'];
			if ($Error === UPLOAD_ERR_OK){
				$URLFoto = $this->directoriofotos . $NombreArchivo;
				move_uploaded_file($NombreTemporal, $URLFoto);
			}
			else {
				$this->Excepcion = "Error al subir la foto al servidor";
				return false;
			}
		}
		
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();

		//Adiciona el registro
		$SQL = "INSERT INTO estudiantes(nombre1, nombre2, apellido1, apellido2, tiposangre, altura, peso, colorojos, fechanace, colorprefiere, profesion, nacionalidad, correo, url, celular, estadocivil, ciudadtrabaja, observacion, foto) VALUES(:nombre1, :nombre2, :apellido1, :apellido2, :tiposangre, :altura, :peso, :colorojos, :fechanace, :colorprefiere, :profesion, :nacionalidad, :correo, :url, :celular, :estadocivil, :ciudadtrabaja, :observacion, :foto)";

		//Hace la adición
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":nombre1", $nombre1);
		$Sentencia->bindValue(":nombre2", $nombre2);
		$Sentencia->bindValue(":apellido1", $apellido1);
		$Sentencia->bindValue(":apellido2", $apellido2);
		$Sentencia->bindValue(":tiposangre", $tiposangre);
		$Sentencia->bindValue(":altura", $altura);
		$Sentencia->bindValue(":peso", $peso);
		$Sentencia->bindValue(":colorojos", $colorojos);
		$Sentencia->bindValue(":fechanace", $fechanace);
		$Sentencia->bindValue(":colorprefiere", $colorprefiere);
		$Sentencia->bindValue(":profesion", $profesion);
		$Sentencia->bindValue(":nacionalidad", $nacionalidad);
		$Sentencia->bindValue(":correo", $correo);
		$Sentencia->bindValue(":url", $url);
		$Sentencia->bindValue(":celular", $celular);
		$Sentencia->bindValue(":estadocivil", $estadocivil);
		$Sentencia->bindValue(":ciudadtrabaja", $ciudadtrabaja);
		$Sentencia->bindValue(":observacion", $observacion);
		$Sentencia->bindValue(":foto", $URLFoto);
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
	
	//Borra la foto y el registro
	public function Borrar($Codigo){
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();
		
		//Borra la foto
		$SQL = "SELECT foto FROM estudiantes WHERE codigo = :codigo";
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":codigo", $Codigo);
		$Sentencia->execute();
		$registro = $Sentencia->fetch();
		unlink($registro[0]);
		
		//Borra el registro
		$SQL = "DELETE FROM estudiantes WHERE codigo = :codigo";
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
		
		$SQL = "SELECT 
			e.codigo AS codigo,
			e.nombre1 AS nombre1,
			e.nombre2 AS nombre2,
			e.apellido1 AS apellido1,
			e.apellido2 AS apellido2,
			c6.nombre AS tiposangre,
			e.altura AS altura,
			e.peso AS peso,
			c1.nombre AS nombrecolorojos,
			DATE_FORMAT(e.fechanace, '%Y-%m-%d') as fecha,
			c2.nombre AS nombrecolorprefiere,
			c3.nombre AS profesion,
			c4.nombre AS nacionalidad,
			e.correo AS correo,
			e.URL as URL,
			e.celular as celular,
			c7.nombre AS estadocivil,
			c5.nombre AS ciudadtrabaja,
			e.observacion AS observacion,
			e.foto AS foto,
			c5.pais AS paistrabaja
		FROM 
			estudiantes e
		JOIN 
			colores c1 ON e.colorojos = c1.codigo
		JOIN 
			colores c2 ON e.colorprefiere = c2.codigo
		JOIN 
			profesiones c3 ON e.profesion = c3.codigo
		JOIN
			paises c4 ON e.nacionalidad = c4.codigo
		JOIN
			ciudades c5 ON e.ciudadtrabaja = c5.codigo
		JOIN
			tiposangre c6 ON e.tiposangre = c6.codigo
		JOIN
			estadocivil c7 ON e.estadocivil = c7.codigo
		WHERE e.codigo = :codigo";

		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":codigo", $Codigo);
		$Sentencia->execute();  //Ejecuta la consulta
		$this->DetalleA = $Sentencia->fetch();
		
		$SQL2 = "SELECT nombre AS nombrepais FROM paises WHERE codigo = :codigo";
		$Sentencia2 = $BaseDatos->Conexion->prepare($SQL2);
		$Sentencia2->bindValue(":codigo", $this->DetalleA[20]);
		$Sentencia2->execute();  //Ejecuta la consulta
		$this->DetalleB = $Sentencia2->fetch();
	}
	
	//Edita el estudiante. Muestra los valores existentes.
	public function EditaMuestra($Codigo){
		$BaseDatos = new basedatos();
		$BaseDatos->Conectar();
		
		$SQL = "SELECT codigo, nombre1, nombre2, apellido1, apellido2, tiposangre, altura, peso, colorojos, DATE_FORMAT(fechanace, '%Y-%m-%d') as fecha, colorprefiere, profesion, nacionalidad, correo, url, celular, estadocivil, ciudadtrabaja, observacion, foto FROM estudiantes WHERE codigo = :codigo";
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->bindValue(":codigo", $Codigo);
		$Sentencia->execute();  //Ejecuta la consulta
		$this->DetalleA = $Sentencia->fetch();
		
		$SQL2 = "SELECT paises.codigo AS codigo, paises.nombre AS paistrabaja FROM ciudades, paises WHERE ciudades.pais = paises.codigo AND ciudades.codigo = :codigo";
		$Sentencia2 = $BaseDatos->Conexion->prepare($SQL2);
		$Sentencia2->bindValue(":codigo", $this->DetalleA['ciudadtrabaja']);
		$Sentencia2->execute();  //Ejecuta la consulta
		$this->DetalleB = $Sentencia2->fetch();
		
		$this->DetalleA['tiposangre'] = $BaseDatos->ComboBoxLleno("tiposangre", "nombre", $this->DetalleA['tiposangre']);
		$this->DetalleA['colorojos'] = $BaseDatos->ComboBoxLleno("colores", "nombre", $this->DetalleA['colorojos']);
		$this->DetalleA['colorprefiere'] = $BaseDatos->ComboBoxLleno("colores", "nombre", $this->DetalleA['colorprefiere']);
		$this->DetalleA['profesion'] = $BaseDatos->ComboBoxLleno("profesiones", "nombre", $this->DetalleA['profesion']);
		$this->DetalleA['nacionalidad'] = $BaseDatos->ComboBoxLleno("paises", "nombre", $this->DetalleA['nacionalidad']);
		$this->DetalleA['estadocivil'] = $BaseDatos->ComboBoxLleno("estadocivil", "nombre", $this->DetalleA['estadocivil']);
		$this->DetalleA['ciudadtrabaja'] = $BaseDatos->ComboBoxLleno("ciudades", "nombre", $this->DetalleA['ciudadtrabaja']);
		$this->DetalleB['paistrabaja'] = $BaseDatos->ComboBoxLleno("paises", "nombre", $this->DetalleB['codigo']);
	}
	
	//Guarda el registro editado
	public function EditaGuarda($FotoAntigua, $codigo, $nombre1, $nombre2, $apellido1, $apellido2, $tiposangre, $altura, $peso, $colorojos, $fechanace, $colorprefiere, $profesion, $nacionalidad, $correo, $url, $celular, $estadocivil, $ciudadtrabaja, $observacion){
		
		//Sube la foto al servidor de archivos 
		$URLFoto = $FotoAntigua;
		if ($_FILES['Foto']['size'] != 0){
			$Foto = $_FILES['Foto'];
			$NombreArchivo = $Foto['name'];
			$NombreTemporal = $Foto['tmp_name'];
			$Error = $Foto['error'];
			if ($Error === UPLOAD_ERR_OK){
				$URLFoto = $this->directoriofotos . $NombreArchivo;
				move_uploaded_file($NombreTemporal, $URLFoto);
				unlink($FotoAntigua); //Borra la foto anterior
			}
			else {
				$this->Excepcion = "Error al subir la foto al servidor";
				return false;
			}
		}
		
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
		$Sentencia->bindValue(":codigo", $codigo);
		$Sentencia->bindValue(":nombre1", $nombre1);
		$Sentencia->bindValue(":nombre2", $nombre2);
		$Sentencia->bindValue(":apellido1", $apellido1);
		$Sentencia->bindValue(":apellido2", $apellido2);
		$Sentencia->bindValue(":tiposangre", $tiposangre);
		$Sentencia->bindValue(":altura", $altura);
		$Sentencia->bindValue(":peso", $peso);
		$Sentencia->bindValue(":colorojos", $colorojos);
		$Sentencia->bindValue(":fechanace", $fechanace);
		$Sentencia->bindValue(":colorprefiere", $colorprefiere);
		$Sentencia->bindValue(":profesion", $profesion);
		$Sentencia->bindValue(":nacionalidad", $nacionalidad);
		$Sentencia->bindValue(":correo", $correo);
		$Sentencia->bindValue(":url", $url);
		$Sentencia->bindValue(":celular", $celular);
		$Sentencia->bindValue(":estadocivil", $estadocivil);
		$Sentencia->bindValue(":ciudadtrabaja", $ciudadtrabaja);
		$Sentencia->bindValue(":observacion", $observacion);
		$Sentencia->bindValue(":foto", $URLFoto);
		
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
			$SQL = "SELECT 
			subquery.codigo, 
			subquery.nombre1, 
			subquery.apellido1, 
			subquery.altura,
			subquery.peso, 
			subquery.color_ojos, 
			subquery.profesion
			FROM (
				SELECT 
					estudiantes.codigo, 
					estudiantes.nombre1, 
					estudiantes.apellido1, 
					estudiantes.altura,
					estudiantes.peso, 
					colores.nombre AS color_ojos, 
					profesiones.nombre AS profesion,
					CASE WHEN estudiantes.codigo = $Codigo THEN 0 ELSE 1 END AS prioridad
				FROM 
					estudiantes
				JOIN 
					colores ON estudiantes.colorojos = colores.codigo
				JOIN 
					profesiones ON estudiantes.profesion = profesiones.codigo
			) AS subquery
			ORDER BY subquery.prioridad, subquery.nombre1
			LIMIT 0, 10;";
		}
		else {
			$SQL = "SELECT 
			estudiantes.codigo, 
			estudiantes.nombre1, 
			estudiantes.apellido1, 
			estudiantes.altura,
			estudiantes.peso, 
			colores.nombre AS color_ojos, 
			profesiones.nombre AS profesion
			FROM 
				estudiantes
			JOIN 
				colores ON estudiantes.colorojos = colores.codigo
			JOIN 
				profesiones ON estudiantes.profesion = profesiones.codigo
			ORDER BY estudiantes.nombre1 LIMIT $Posicion, 10";
		}
		
		$Sentencia = $BaseDatos->Conexion->prepare($SQL);
		$Sentencia->execute();  //Ejecuta la consulta
		$Registros = $Sentencia->fetchAll();
		return $Registros;
	}
}