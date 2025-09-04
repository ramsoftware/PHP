<?php
class MiClase {
	function MetodoA(){
		document.write("<br>Llama al método A");
	}
}
$valorA = new MiClase();
echo "<br>1. Tipo de valorA es " .  gettype($valorA);

$valorA = 157;
echo "<br>2. Tipo de valorA es " .  gettype($valorA) . ": " . $valorA;
$valorA = "Había una vez...";
echo "<br>3. Tipo de valorA es " .  gettype($valorA) . ": " . $valorA;
$valorA = 'K';
echo "<br>4. Tipo de valorA es " .  gettype($valorA) . ": " . $valorA;
$valorA = true;
echo "<br>5. Tipo de valorA es " .  gettype($valorA) . ": " . $valorA;
$valorA = asin(39); //NAN
echo "<br>6. Tipo de valorA es " .  gettype($valorA) . ": " . $valorA;
$valorA = pi();
echo "<br>7. Tipo de valorA es " .  gettype($valorA) . ": " . $valorA;
$valorA = array();
echo "<br>8. Tipo de valorA es " .  gettype($valorA);
$valorA = NULL;
echo "<br>9. Tipo de valorA es " .  gettype($valorA);
