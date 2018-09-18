<?php
//PHP, NET o Python
class Programador extends Empleado{
	private $lenguaje;

	public function __construct($id,$nombre,$apellido,$edad,$lenguaje){
		if(in_array($lenguaje, array('PHP','NET','Python'))){
			$this->lenguaje = $lenguaje;
		} else {
			$this->lenguaje = 'Desconocido';
		}
		parent::__construct($id,$nombre,$apellido,$edad);
	}

	public function get_lenguaje(){
		return $this->lenguaje;
	}
	public function set_lenguaje($lenguaje){
		if(in_array($lenguaje, array('PHP','NET','Python'))){
			$this->lenguaje = $lenguaje;
		} else {
			$this->lenguaje = 'Desconocido';
		}
	}
}