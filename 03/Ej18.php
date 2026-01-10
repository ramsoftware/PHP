<?php
//Convertir a binario
ConvierteBinario(70);

function ConvierteBinario($numero){
	if ($numero!=0){
		ConvierteBinario(floor($numero/2));
		echo $numero%2;
	}
}
