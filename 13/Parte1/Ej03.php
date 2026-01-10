<?php 
/* Hallar la hipotenusa de un triángulo rectángulo */
$catA = 10;
$catB = 30;
$Hipotenusa = sqrt($catA*$catA+$catB*$catB);

/* Impresión */
echo "<!DOCTYPE HTML><html><body>";
echo "<table border='1'>";
echo "<tr><td>Cateto A:</td><td>" . $catA . "</td></tr>";
echo "<tr><td>Cateto B:</td><td>" . $catB . "</td></tr>";
echo "<tr><td>Hipotenusa:</td><td>". $Hipotenusa . "</td></tr>";
echo "</table></body></html>";
