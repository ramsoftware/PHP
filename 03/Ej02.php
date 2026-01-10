<?php
include "Libreria.php";

$valor = 789121;
$cifra = 3;
echo "Número es: ". $valor . "<br>";

echo "Palíndromo: ";
if (EsPalindromo($valor))
	echo "Verdadero<br>";
else echo "Falso<br>";

echo "Últimas dos cifras: "; 
echo retornadosultimascifras($valor) . "<br>";

echo "Total de cifra " . $cifra . " halladas: ";
echo cifrashalladas($valor, $cifra) . "<br>";

echo "Inverso: ";
echo InvierteNumero($valor) . "<br>";

echo "Primera cifra: ";
echo PrimeraCifra($valor) . "<br>";

echo "Total cifras: ";
echo TotalCifras($valor) . "<br>";

echo "¿Impar?: ";
if (EsImpar($valor))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "¿Par?: ";
if (EsPar($valor))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "Sumatoria de cifras: ";
echo SumaCifras($valor) . "<br>";

echo "Última cifra: ";
echo UltimaCifra($valor) . "<br>";

echo "¿Primo?: ";
if (EsPrimo($valor))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "¿Todas sus cifras son pares?: "; 
if (TodasCifrasPares($valor))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "¿Todas sus cifras son impares?: "; 
if (TodasCifrasImpares($valor))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "Total cifras pares: ";
echo TotalCifrasPares($valor) . "<br>";

echo "Total cifras impares: ";
echo TotalCifrasImpares($valor) . "<br>";

echo "Cifra más alta: ";
echo LaCifraMasAlta($valor) . "<br>";

echo "Cifra más baja: ";
echo LaCifraMasBaja($valor) . "<br>";

echo "Sólo hay cifras menores o iguales a " . $cifra . ": ";
if (SoloCifrasMenorIgual($valor, $cifra))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "Sólo hay cifras mayores o iguales a " . $cifra . ": ";
if (SoloCifrasMayorIgual($valor, $cifra))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "¿Tiene distintas cifras?: ";
if (DistintasCifras($valor))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "¿Tiene distintas cifras pares?: ";
if (DistintasCifrasPares($valor))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "¿Tiene distintas cifras impares?: ";
if (DistintasCifrasImPares($valor))
	echo "Verdadero<br>";
else
	echo "Falso<br>";

echo "Sumatoria de sus cifras al cuadrado: ";
echo sumacifrascuadrado($valor) . "<br>";
