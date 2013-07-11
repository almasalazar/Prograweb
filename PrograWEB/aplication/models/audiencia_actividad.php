
<?php
class Audiencia_actividad{
	private $id_actividad;
	private $id_persona;
	
	public function get_id_actividad(){
                    return $this->$id_actividad;
	}
	
	public function get_id_persona(){
                      return $this->$id_persona;
	}
	
	
	public function set_id_actividad($valor){
                     $this->$id_actividad=$valor;
	}
	
	public function set_id_persona($valor){
                       $this->$id_persona=$valor;
	}
}
?>