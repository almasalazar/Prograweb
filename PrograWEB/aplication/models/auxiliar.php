<?php
	private $id_asistente;
	private $id_persona;
	
	public function get_id_asistente(){
    return this->$id_asistente;
	}
	
	public function get_id_persona(){
    return this->$id_persona;
	}
	
	public function set_id_persona($valor){
    this->id_persona=$valor
	}
	
	public function set_id_asistente($valor){
    this->id_asistente=$valor
	}
?>