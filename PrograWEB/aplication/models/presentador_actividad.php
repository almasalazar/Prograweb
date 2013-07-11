
<?php
class Presentador_actividad{
	private $id_actividad;
	private $id_presentador;
	
	public function get_id_actividad(){
		return $this->id_actividad;
	}

	public function get_id_presentador(){
		return $this->id_presentador;
	}


	public function set_id_actividad( $valor ){
                $this->id_actividad = $valor;
        }

    public function set_id_presentador( $valor ){
                $this->id_presentador = $valor;
        }

}
?>









