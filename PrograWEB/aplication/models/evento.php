<?php
class Evento{
	private $id_evento;
	private $nombre;
	private $descripcion;
	private $fecha_ini;
	private $fecha_fin;
	private $lugar;
	
	
	public function  get_id_evento(){
                    return $this->id_evento;
	}
	
	public function get_nombre(){
                      return $this->nombre;
	}
	public function  get_descripcion(){
                      return $this->descripcion;
	}
	public function get_fecha_ini(){
                    return $this->fecha_ini;
	}
	
	public function get_fecha_fin(){
                      return $this->fecha_fin;
	}
	public function  get_id_lugar(){
                      return $this->id_lugar;
	}
	
	
	
	public function  set_id_evento($valor){
                     $this->id_evento=$valor;
	}
	
	public function  set_nombre($valor){
                       $this->nombre=$valor;
	}
	public function set_descripcion($valor){
                       $this->descripcion=$valor;
	}
	public function set_fecha_ini($valor){
                     $this->fecha_ini=$valor;
	}
	
	public function set_fecha_fin($valor){
                       $this->fecha_fin=$valor;
	}
	public function set_lugar($valor){
                       $this->lugar=$valor;
	}
}
?>