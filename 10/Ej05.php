<?php
class MiClase{
	//Constante
	const VALORCONSTANTE = 2.7812431;
}

$instancia = new MiClase(); //Instancia la clase

//Así se accede desde afuera a una constante
echo $instancia::VALORCONSTANTE . "<br>";

//Esto no se puede hacer
//$instancia::VALORCONSTANTE = 77;
