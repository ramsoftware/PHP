<?php
$Xinicial = -3;
$Xfinal = 2;
$Ciclos = 100; //Número de veces que hará la operación de aproximación

//Verifica que entre $Xinicial y $Xfinal exista un corte 
if (ecuacion($Xinicial) * ecuacion($Xfinal) > 0){
	echo "No hay punto de corte en los puntos dados";
}else{ //Si hay intersección, entonces llama a la función de Bisección
	$Xresultado = Biseccion($Xinicial, $Xfinal, $Ciclos);
	echo "Punto de corte en: " . $Xresultado;
}
//Retorna el punto X entre $Xinicial y $Xfinal que más se aproxime al punto de corte
function Biseccion($Xinicial, $Xfinal, $Ciclos){
	$Xmedio = 0;
	if (ecuacion($Xinicial)==0) $Xmedio = $Xinicial;
	else if (ecuacion($Xfinal)==0) $Xmedio = $Xfinal;
	else
		for($cont=1; $cont<=$Ciclos; $cont++){
			$Xmedio = ($Xinicial + $Xfinal) / 2;
			if (ecuacion($Xmedio)==0) break;
			else if (ecuacion($Xinicial)*ecuacion($Xmedio) < 0) $Xfinal = $Xmedio;
			else $Xinicial = $Xmedio;
		}
	return $Xmedio;
}

function ecuacion($x){ //En esta función se pone la ecuación
	return 4*$x*$x*$x-3*$x*$x-5*$x+2;
}
