<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Hace la consulta a la tabla de ese registro en particular
$codigo = abs(intval($_GET["codigo"]));
$SQL = "SELECT codigo, nombre1, nombre2, apellido1, apellido2, tiposangre, altura, peso, colorojos, DATE_FORMAT(fechanace, '%Y-%m-%d') as fecha, colorprefiere, profesion, nacionalidad, correo, url, celular, estadocivil, ciudadtrabaja, observacion, foto FROM estudiantes WHERE codigo = :codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":codigo", $codigo);
$Sentencia->execute();  //Ejecuta la consulta
$registro = $Sentencia->fetch();

//Forma el combobox tiposangre
$SQL = "SELECT nombre FROM tiposangre WHERE codigo = :Codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":Codigo", $registro['tiposangre']);
$Sentencia->execute();
$Lista = $Sentencia->fetch();
$TipoSangre = '<option value="'. $registro['tiposangre'] .'" selected="selected">'. $Lista[0] . '</option>';

//Forma el combobox colorojos
$SQL = "SELECT nombre FROM colores WHERE codigo = :Codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":Codigo", $registro['colorojos']);
$Sentencia->execute();
$Lista = $Sentencia->fetch();
$ColorOjos = '<option value="'. $registro['colorojos'] .'" selected="selected">'. $Lista[0] . '</option>';

//Forma el combobox colorprefiere
$SQL = "SELECT nombre FROM colores WHERE codigo = :Codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":Codigo", $registro['colorprefiere']);
$Sentencia->execute();
$Lista = $Sentencia->fetch();
$ColorPrefiere = '<option value="'. $registro['colorprefiere'] .'" selected="selected">'. $Lista[0] . '</option>';

//Forma el combobox profesion
$SQL = "SELECT nombre FROM profesiones WHERE codigo = :Codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":Codigo", $registro['profesion']);
$Sentencia->execute();
$Lista = $Sentencia->fetch();
$Profesion = '<option value="'. $registro['profesion'] .'" selected="selected">'. $Lista[0] . '</option>';

//Forma el combobox nacionalidad
$SQL = "SELECT nombre FROM paises WHERE codigo = :Codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":Codigo", $registro['nacionalidad']);
$Sentencia->execute();
$Lista = $Sentencia->fetch();
$Nacionalidad = '<option value="'. $registro['nacionalidad'] .'" selected="selected">'. $Lista[0] . '</option>';

//Forma el combobox estado civil
$SQL = "SELECT nombre FROM estadocivil WHERE codigo = :Codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":Codigo", $registro['estadocivil']);
$Sentencia->execute();
$Lista = $Sentencia->fetch();
$EstadoCivil = '<option value="'. $registro['estadocivil'] .'" selected="selected">'. $Lista[0] . '</option>';

//Forma el combobox ciudad donde trabaja
$SQL = "SELECT nombre FROM ciudades WHERE codigo = :Codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":Codigo", $registro['ciudadtrabaja']);
$Sentencia->execute();
$Lista = $Sentencia->fetch();
$CiudadTrabaja = '<option value="'. $registro['ciudadtrabaja'] .'" selected="selected">'. $Lista[0] . '</option>';


//Respuesta HTML
$Pantalla = "";
$Pantalla = file_get_contents("../../visual/estudiantes/editar.html");
$Pantalla = str_replace("{codigo}", $registro['codigo'], $Pantalla);
$Pantalla = str_replace("{nombre1}", $registro['nombre1'], $Pantalla);
$Pantalla = str_replace("{nombre2}", $registro['nombre2'], $Pantalla);
$Pantalla = str_replace("{apellido1}", $registro['apellido1'], $Pantalla);
$Pantalla = str_replace("{apellido2}", $registro['apellido2'], $Pantalla);
$Pantalla = str_replace("{tiposangre}", $TipoSangre, $Pantalla);
$Pantalla = str_replace("{altura}", $registro['altura'], $Pantalla);
$Pantalla = str_replace("{peso}", $registro['peso'], $Pantalla);
$Pantalla = str_replace("{colorojos}", $ColorOjos, $Pantalla);
$Pantalla = str_replace("{fechanace}", $registro['fecha'], $Pantalla);
$Pantalla = str_replace("{colorprefiere}", $ColorPrefiere, $Pantalla);
$Pantalla = str_replace("{profesion}", $Profesion, $Pantalla);
$Pantalla = str_replace("{nacionalidad}", $Nacionalidad, $Pantalla);
$Pantalla = str_replace("{correo}", $registro['correo'], $Pantalla);
$Pantalla = str_replace("{url}", $registro['url'], $Pantalla);
$Pantalla = str_replace("{celular}", $registro['celular'], $Pantalla);
$Pantalla = str_replace("{estadocivil}", $EstadoCivil, $Pantalla);
$Pantalla = str_replace("{ciudadtrabaja}", $CiudadTrabaja, $Pantalla);
$Pantalla = str_replace("{observacion}", $registro['observacion'], $Pantalla);
$Pantalla = str_replace("{fotoantigua}", $registro['foto'], $Pantalla);
echo $Pantalla;