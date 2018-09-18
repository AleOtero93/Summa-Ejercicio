<?php

class Empresa{
	private $id;
	private $nombre;
	private $empleados;

	public function __construct($id, $nombre, $empleados){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->empleados = $empleados;
	}

	public function get_id(){
		return $this->id;
	}

	public function get_nombre(){
		return $this->nombre;
	}
	public function set_nombre($nombre){
		$this->nombre = $nombre;
	}

	public function get_empleados(){
		return $this->empleados;
	}
	public function set_empleados($empleados){
		$this->empleados = $empleados;
	}

	public function add_empleado($empleado){
		array_push($this->empleados, $empleado);
	}
	public function remove_empleado($empleado){
		//Si envía un id.
		if(is_numeric($empleado)){
			foreach($this->empleados as $k=>$emp){
				if($empleado == $emp->get_id()){
					unset($this->empleados[$k]);
					return;
				}
			}
		} else {
			//Si envía un empleado.
			$key = array_search($empleado, $this->empleados);
			if($key !== FALSE){
				unset($this->empleados[$key]);
				return;
			}
		}
	}

	//Si bien con devolver esto ya alcanzaría, agrego la parte de validación que debería estar en el Front.
	public function get_empleado($id){
		$emp_val = 0;
		foreach($this->empleados as $emp){
			if($id == $emp->get_id()){
				$emp_val = 1;
				$empleado = $emp;
				break;
			}
		}

		if($emp_val == 0){
			$empleado = 'No se encontro al empleado buscado';
		}
		return $empleado;
	}

	public function promedio_edad(){
		$suma_edad = 0;
		$cantidad = count($this->empleados);
		if($cantidad == 0){
			return 'No hay empleados';
		}
		foreach($this->empleados as $emp){
			$suma_edad += $emp->get_edad();
		}

		return ($suma_edad / $cantidad);
	}

	public function get_listado_empleados(){
		$list = array();
		$i = 0;
		foreach($this->empleados as $emp){
			$list[$i]['id'] = $emp->get_id();
			$list[$i]['nombre'] = $emp->get_nombre();
			$list[$i]['apellido'] = $emp->get_apellido();
			$list[$i]['edad'] = $emp->get_edad();

			$clase = get_class($emp);
			$list[$i]['clase'] = $clase;

			//Para no hacer una funcion distinta segun la clase.
			$list[$i]['lenguaje'] = $emp->get_lenguaje();

			$i++;
		}

		return $list;
	}

}