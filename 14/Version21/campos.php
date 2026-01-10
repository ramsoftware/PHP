<?php
$NombreBaseDatos = $_GET['db'];
$Tabla = $_GET['table'];

//Conectarse a la base de datos
require_once("BD.php");
$BaseDatos = new basedatos();
$BaseDatos->Conectar($NombreBaseDatos);

    // Obtener columnas completas
    $SQL = $BaseDatos->Conexion->query("SHOW FULL COLUMNS FROM `$Tabla`");
    $Columnas = $SQL->fetchAll();

    // Obtener claves foráneas
    $LlavesForaneas = [];
    $SQLForaneas = $BaseDatos->Conexion->prepare("
        SELECT COLUMN_NAME, REFERENCED_TABLE_NAME, REFERENCED_COLUMN_NAME
        FROM INFORMATION_SCHEMA.KEY_COLUMN_USAGE
        WHERE TABLE_SCHEMA = :db AND TABLE_NAME = :table AND REFERENCED_TABLE_NAME IS NOT NULL
    ");
    $SQLForaneas->execute(['db' => $NombreBaseDatos, 'table' => $Tabla]);
    while ($Foranea = $SQLForaneas->fetch()) {
        $LlavesForaneas[$Foranea['COLUMN_NAME']] = $Foranea['REFERENCED_TABLE_NAME'] . '(' . $Foranea['REFERENCED_COLUMN_NAME'] . ')';
    }

    // Obtener claves primarias
    $LlavesPrimarias = [];
    $SQLPrimarias = $BaseDatos->Conexion->prepare("
        SELECT COLUMN_NAME
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_SCHEMA = :db AND TABLE_NAME = :table AND COLUMN_KEY = 'PRI'
    ");
    $SQLPrimarias->execute(['db' => $NombreBaseDatos, 'table' => $Tabla]);
    while ($Llave = $SQLPrimarias->fetch()) {
        $LlavesPrimarias[] = $Llave['COLUMN_NAME'];
    }

$Datos = "";
foreach ($Columnas as $Columna) {
    $Nombre = htmlspecialchars($Columna['Field']);
    $Tipo = htmlspecialchars($Columna['Type']);
    $EsLlavePrimaria = in_array($Nombre, $LlavesPrimarias) ? 'Sí' : 'No';
    $EsNotNull = $Columna['Null'] === 'NO' ? 'Sí' : 'No';
    $Referenciado = isset($LlavesForaneas[$Nombre]) ? htmlspecialchars($LlavesForaneas[$Nombre]) : 'No';
    $Datos .= "<tr>
                <td>$Nombre</td>
                <td>$Tipo</td>
                <td>$EsLlavePrimaria</td>
                <td>$EsNotNull</td>
                <td>$Referenciado</td>
              </tr>";
}

//Respuesta HTML
$Pantalla = file_get_contents("campos.html");
$Pantalla = str_replace("{Datos}", $Datos, $Pantalla);
echo $Pantalla;