<?php 
/* Hallar la hipotenusa de un triángulo rectángulo */
$catA = 10;
$catB = 30;
$Hipotenusa = sqrt($catA*$catA+$catB*$catB);

/* Impresión */
echo "<!DOCTYPE HTML><html><body>";
echo "Cateto A: " . $catA . "<br>";
echo "Cateto B: " . $catB . "<br>";
echo "Hipotenusa: ". $Hipotenusa . "<br>";
echo "</body></html>";
