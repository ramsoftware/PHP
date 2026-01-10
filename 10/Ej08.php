<?php
class MiClase{
	//Constructor
	function __construct(){
		echo "Se ha construido el objeto<br>";
	}
	//Destructor
	function __destruct(){
		echo "Se ha destruido el objeto<br>";
	}
}

//Se instancia la clase
$objeto = new MiClase();
