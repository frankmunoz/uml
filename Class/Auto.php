<?php
/* Clase Auto */
Class Auto{
	public $marca;
	public $modelo;
	private $year;
	private $color;
	private $numeroPuertas;
	private $placa;

	public function arrancar(){

	}
	public function acelerar(){

	}
	public function frenar(){

	}

	public function getMarca(){
		return $this->marca;
	}
	public function setMarca($marca){
		$this->marca = $marca;
	}

}

$auto1 = new Auto();
$auto1->setMarca("Toyota");
echo $auto1->getMarca();
