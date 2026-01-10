<?php
//Conectarse a la base de datos
require_once("../../persiste/BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar();

//Hace la consulta a la tabla de ese registro en particular
$codigo = abs(intval($_GET["codigo"]));
$SQL = "SELECT 
    e.codigo, e.nombre1, e.nombre2, e.apellido1, e.apellido2,
    c6.nombre AS tiposangre, e.altura, e.peso,
    c1.nombre AS nombre_colorojos,
    DATE_FORMAT(e.fechanace, '%Y-%m-%d') as fecha,
    c2.nombre AS nombre_colorprefiere,
    c3.nombre AS profesion,
    c4.nombre AS nacionalidad,
    e.correo, e.URL, e.celular,
    c7.nombre AS estadocivil,
    c5.nombre AS CiudadTrabajo
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
$Sentencia->bindValue(":codigo", $codigo);
$Sentencia->execute();  //Ejecuta la consulta
$registro = $Sentencia->fetch();

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/estudiantes/detalle.html");
$Pantalla = str_replace("{codigo}", $registro[0], $Pantalla);
$Pantalla = str_replace("{nombre1}", $registro[1], $Pantalla);
$Pantalla = str_replace("{nombre2}", $registro[2], $Pantalla);
$Pantalla = str_replace("{apellido1}", $registro[3], $Pantalla);
$Pantalla = str_replace("{apellido2}", $registro[4], $Pantalla);
$Pantalla = str_replace("{tiposangre}", $registro[5], $Pantalla);
$Pantalla = str_replace("{altura}", $registro[6], $Pantalla);
$Pantalla = str_replace("{peso}", $registro[7], $Pantalla);
$Pantalla = str_replace("{colorojos}", $registro[8], $Pantalla);
$Pantalla = str_replace("{fechanace}", $registro[9], $Pantalla);
$Pantalla = str_replace("{colorprefiere}", $registro[10], $Pantalla);
$Pantalla = str_replace("{profesion}", $registro[11], $Pantalla);
$Pantalla = str_replace("{nacionalidad}", $registro[12], $Pantalla);
$Pantalla = str_replace("{correo}", $registro[13], $Pantalla);
$Pantalla = str_replace("{url}", $registro[14], $Pantalla);
$Pantalla = str_replace("{celular}", $registro[15], $Pantalla);
$Pantalla = str_replace("{estadocivil}", $registro[16], $Pantalla);
$Pantalla = str_replace("{ciudadtrabaja}", $registro[17], $Pantalla);
echo $Pantalla;
