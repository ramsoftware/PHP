<?php
//Lee los parámetros que llegan por variables ocultas
$baseTriangulo = $_POST['base'];
$alturaTriangulo = $_POST['altura'];

//Hace el cálculo
$area = $baseTriangulo * $alturaTriangulo / 2;

//Muestra el resultado
echo "Área Triángulo<br>";
echo "Base: " . $baseTriangulo . "<br>";
echo "Altura: " . $alturaTriangulo . "<br>";
echo "Área: " . $area;
