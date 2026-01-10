<?php 
//Librería matemática.
$angGrados = 35;
echo "Grados: " . $angGrados;
$angRadian = $angGrados*M_PI/180;
echo "<br>Radianes: " . $angRadian;
$seno = sin($angRadian); //Seno
echo "<br>Seno: " . $seno;
$coseno = cos($angRadian); //Coseno
echo "<br>Coseno: " . $coseno;
$tangente = tan($angRadian); //Tangente
echo "<br>Tangente: " . $tangente;
$arcoseno = asin($seno); //Arcoseno
echo "<br>Arcoseno: " . $arcoseno;
$arcocoseno = acos($coseno); //Arcocoseno
echo "<br>Arcocoseno: " . $arcocoseno;
$arcotangente = atan($tangente); //Arcotangente
echo "<br>Arcotangente: " . $arcotangente;
