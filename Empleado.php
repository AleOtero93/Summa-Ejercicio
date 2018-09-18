<?php

abstract class Empleado{
	private $id;
	private $nombre;
	private $apellido;
	private $edad;

	public function __construct($id, $nombre, $apellido, $edad){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->edad = $edad;
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

	public function get_apellido(){
		return $this->apellido;
	}
	public function set_apellido($apellido){
		$this->apellido = $apellido;
	}

	public function get_edad(){
		return $this->edad;
	}
	public function set_edad($edad){
		$this->edad = $edad;
	}
}