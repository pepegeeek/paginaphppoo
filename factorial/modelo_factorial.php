<?php
//Generación de metodos para calcular el factorial

class factorial{
	private $num, $resultado, $imp;

	//M E T O D O - C O N S T R U C T O R   __construct() o SetDatos
	public function Setvalor($num){
		$this->num=$num;
		$this->resultado=1;
		$this->imp=$num;

	}
	//M E T O D O - P A R A  C A L C U L O  F A C T O R I A L
	public function calculafactorial(){
		
		while ($this->num>0) {

			$this->resultado= $this->resultado*$this->num;
			$this->num--;
			# code...
		}
		
	}
	//imprimir datos

	public function Getvalor(){

		echo "El factorial de: ".$this->imp." es ".$this->resultado;
	}
	

}

require_once 'factorial.php';
?>