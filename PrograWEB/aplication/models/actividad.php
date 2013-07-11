<?php
class Actividad{
	// *Variables Globales Privadas
	private	$id_actividad;
	private $nombre;
	private $capacidad;
	private $lugar;
	private $precio;
	private $fecha_ini;
	private $fecha_fin;
	private $horario;
	private $descripcion;
	private $evento;

	function get_id_actividad(){
		return $this->id_actividad;
	}

	function get_nombre(){
                return $this->nombre;
        }

	function get_capacidad(){
		return $this->capacidad;
	}

	function get_lugar(){
		return $this->lugar;
	}

	function get_precio(){
		return $this->precio;
	}

	function get_fecha_ini(){
		return $this->fecha_ini;
	}

	function get_fecha_fin(){
		return $this->fecha_fin;
	}

	function get_horario(){
		return $this->horario;
	}

	function get_descripcion(){
		return $this->descripcion;
	}

	function get_evento(){
		return $this->evento;
	}
	
	function set_id_actividad( $valor ){
		$this->id_activdad = $valor;
	}

	function set_nombre( $valor ){
		$this->nombre = $valor;
	}

	function set_capacidad( $valor ){
		$this->capacidad = $valor;
	}

	function set_lugar( $valor ){
		$this->lugar = $valor;
	}

	function set_precio( $valor ){
		$this->precio = $valor;
	}

	function set_fecha_ini( $valor ){
		$this->fecha_ini = $valor;
	}

	function set_fecha_fin( $valor ){
		$this->fecha_fin = $valor;
	}

	function set_horario( $valor ){
		$this->horario = $valor;
	}

	function set_descripcion( $valor ){
		$this->descripcion = $valor;
	}

	function set_evento( $valor ){
		$this->evento = $evento;
	}
}
?>
