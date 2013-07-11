

<?php
	private $id_maestro;
	private $rfc;
	private $id_persona;
	
	public get_id_maestro(){
                    return this->$id_maestro;
	}
	
	public get_rfc(){
                      return this->$rfc;
	}
	public get_id_persona(){
                      return this->$id_persona;
	}
	
	
	public set_id_maestro($valor){
                     $this->$id_maestro=$valor;
	}
	
	public set_rfc($valor){
                       $this->$rfc=$valor;
	}
	public set_id_persona($valor){
                       $this->$id_persona=$valor;
	}
?>

