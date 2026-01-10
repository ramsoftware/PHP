<?php
if (is_nan(sqrt(3))) //Raíz cuadrada de un número positivo
	echo "1. Inválido <br>";
else
	echo "1. Válido <br>";
	
if (is_nan(sqrt(-3))) //Raíz cuadrada de un número negativo
	echo "2. Inválido <br>";
else
	echo "2. Válido <br>"; 
