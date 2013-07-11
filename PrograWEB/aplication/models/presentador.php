/**********************************************
          Modelado TablaPresentador PHP
***********************************************/



// -> *Variables Globales Privadas
<?php
	private $id_presentador;
	private $rfc_clave;
	private $id_persona;

		// -> *Modelado
		
	// *Obtener Valores
	public function get_id_presentador(){
		return this->$id_presentador;
	}

	public function get_rfc_clave(){
		return this->$rfc_clave;
	}

	public function get_id_persona(){
		return this->$id_persona;
	}
	//----------------------------------------------



	// *Asignar Valores
	public function set_id_presentador( $valor ){
                this->$id_presentador = $valor;
        }

    public function set_rfc_clave( $valor ){
                this->$rfc_clave = $valor;
        }

	public function set_id_persona( $valor ){
		this->id_persona = $valor;
	}
?>



