<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Hace la consulta a la tabla de ese registro en particular
$codigo = abs(intval($_GET["codigo"]));
$SQL = "SELECT codigo, nombre1, nombre2, apellido1, apellido2, tiposangre, altura, peso, colorojos, DATE_FORMAT(fechanace, '%Y-%m-%d') as fecha, colorprefiere, profesion, nacionalidad, correo, url, celular, estadocivil, ciudadtrabaja FROM estudiantes WHERE codigo = :codigo";
$Sentencia = $BaseDatos->Conexion->prepare($SQL);
$Sentencia->bindValue(":codigo", $codigo);
$Sentencia->execute();  //Ejecuta la consulta
$registro = $Sentencia->fetch();

//Respuesta HTML
$Pantalla = "";
$Pantalla = file_get_contents("../../visual/estudiantes/editar.html");
$Pantalla = str_replace("{codigo}", $registro['codigo'], $Pantalla);
$Pantalla = str_replace("{nombre1}", $registro['nombre1'], $Pantalla);
$Pantalla = str_replace("{nombre2}", $registro['nombre2'], $Pantalla);
$Pantalla = str_replace("{apellido1}", $registro['apellido1'], $Pantalla);
$Pantalla = str_replace("{apellido2}", $registro['apellido2'], $Pantalla);
$Pantalla = str_replace("{tiposangre}", $registro['tiposangre'], $Pantalla);
$Pantalla = str_replace("{altura}", $registro['altura'], $Pantalla);
$Pantalla = str_replace("{peso}", $registro['peso'], $Pantalla);
$Pantalla = str_replace("{colorojos}", $registro['colorojos'], $Pantalla);
$Pantalla = str_replace("{fechanace}", $registro['fecha'], $Pantalla);
$Pantalla = str_replace("{colorprefiere}", $registro['colorprefiere'], $Pantalla);
$Pantalla = str_replace("{profesion}", $registro['profesion'], $Pantalla);
$Pantalla = str_replace("{nacionalidad}", $registro['nacionalidad'], $Pantalla);
$Pantalla = str_replace("{correo}", $registro['correo'], $Pantalla);
$Pantalla = str_replace("{url}", $registro['url'], $Pantalla);
$Pantalla = str_replace("{celular}", $registro['celular'], $Pantalla);
$Pantalla = str_replace("{estadocivil}", $registro['estadocivil'], $Pantalla);
$Pantalla = str_replace("{ciudadtrabaja}", $registro['ciudadtrabaja'], $Pantalla);
echo $Pantalla;
