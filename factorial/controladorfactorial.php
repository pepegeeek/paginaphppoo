<?php
//Controlador del proceso factorial
extract($_GET);
//isset para validar si hay datos en el envio

	//Ejecutar o disparar los metodos que se encuentren en el modelo
	require_once 'modelo_factorial.php';
	//Instanciar la clase
	$objfactorial = new factorial();
	$objfactorial->Setvalor($num);
	$objfactorial->calculafactorial();
	$objfactorial->Getvalor();



?>