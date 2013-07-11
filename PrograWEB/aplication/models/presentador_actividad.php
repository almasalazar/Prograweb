/**********************************************
          Modelado TablaPresentador_Actividad PHP
***********************************************/



// -> *Variables Globales Privadas
<?php
	private $id_actividad;
	private $id_presentador;
	
// -> *Modelado
	
		// *Obtener Valores
	public function get_id_actividad(){
		$return $this->$id_actividad;
	}

	public function get_id_presentador(){
		$return $this->$id_presentador;
	}

//----------------------------------------------


	// *Asignar Valores
	public function set_id_actividad( $valor ){
                $this->$id_actividad = $valor;
        }

    public function set_id_presentador( $valor ){
                $this->$id_presentador = $valor;
        }

//----------------------------------------------
?>
//------------------------------------------------------









