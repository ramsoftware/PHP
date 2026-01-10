<?php
//Importa la librería que valida la sesion
require_once("../sesion/sesionregistra.php");

//Respuesta HTML
$Pantalla = file_get_contents("../../visual/menu/registra.html");
$Pantalla = str_replace("{usuarionombre}", $_SESSION['usuarionombre'], $Pantalla);
echo $Pantalla;
