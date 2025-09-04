<?php /* Separar HTML (parte visual) de la parte lógica */
//La lógica
$catA = 10;
$catB = 30;
$Hipotenusa = sqrt($catA*$catA+$catB*$catB);

//Llama la parte visual
$plantilla = file_get_contents('Partevisual.html');

//Actualiza la parte visual con los datos
$resultado = str_replace('{catetoA}', $catA, $plantilla);
$resultado = str_replace('{catetoB}', $catB, $resultado);
$resultado = str_replace('{hipotenusa}', $Hipotenusa, $resultado);

//Muestra el resultado al usuario
echo $resultado;
