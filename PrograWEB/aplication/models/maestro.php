

<?php
class Maestro{
	private $id_maestro;
	private $rfc;
	private $id_persona;
	
	public function get_id_maestro(){
                    return $this->id_maestro;
	}
	
	public function get_rfc(){
                      return $this->rfc;
	}
	public function get_id_persona(){
                      return $this->id_persona;
	}
	
	
	public function set_id_maestro($valor){
                     $this->id_maestro=$valor;
	}
	
	public function set_rfc($valor){
                       $this->rfc=$valor;
	}
	public function set_id_persona($valor){
                       $this->id_persona=$valor;
	}
}
?>

