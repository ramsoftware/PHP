<?php
//Lee los parámetros que llegan por la línea URL
$baseTriangulo = $_GET['base'];
$alturaTriangulo = $_GET['altura'];

//Hace el cálculo
$area = $baseTriangulo * $alturaTriangulo / 2;

//Muestra el resultado
echo "Área Triángulo<br>";
echo "Base: " . $baseTriangulo . "<br>";
echo "Altura: " . $alturaTriangulo . "<br>";
echo "Área: " . $area;
