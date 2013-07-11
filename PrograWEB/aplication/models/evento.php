<?php
	private $id_evento;
	private $nombre;
	private $descripcion;
	private $fecha_ini;
	private $fecha_fin;
	private $lugar;
	
	
	public get_id_evento(){
                    return this->$id_evento;
	}
	
	public get_nombre(){
                      return this->$nombre;
	}
	public get_descripcion(){
                      return this->$descripcion;
	}
	public get_fecha_ini(){
                    return this->$fecha_ini;
	}
	
	public get_fecha_fin(){
                      return this->$fecha_fin;
	}
	public get_id_lugar(){
                      return this->$id_lugar;
	}
	
	
	
	public set_id_evento($valor){
                     $this->$id_evento=$valor;
	}
	
	public set_nombre($valor){
                       $this->$nombre=$valor;
	}
	public set_descripcion($valor){
                       $this->$descripcion=$valor;
	}
	public set_fecha_ini($valor){
                     $this->$fecha_ini=$valor;
	}
	
	public set_fecha_fin($valor){
                       $this->$fecha_fin=$valor;
	}
	public set_lugar($valor){
                       $this->$lugar=$valor;
	}
?>