<?php
//Grafico o Web
class Disenador extends Empleado{
	private $tipo;

	public function __construct($id,$nombre,$apellido,$edad,$tipo){
		if(in_array($tipo, array('Grafico','Web'))){
			$this->tipo = $tipo;
		} else {
			$this->tipo = 'Desconocido';
		}
		parent::__construct($id,$nombre,$apellido,$edad);
	}

	//Me ahorro el hacer una funcion distinta segun la clase de esta manera.
	//Ya sea Programador o Disenador, hago get/set lenguaje.
	public function get_lenguaje(){
		return $this->tipo;
	}
	public function set_lenguaje($tipo){
		if(in_array($tipo, array('Grafico','Web'))){
			$this->tipo = $tipo;
		} else {
			$this->tipo = 'Desconocido';
		}
	}
}