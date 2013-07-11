
<?php
class Auxiliar_actividad{

	private $id_actividad;
	private $id_auxiluar;
	private $encargado;

	
	function get_id_actividad(){
		return $this->id_actividad;
	}

	function get_id_auxiliar(){
		return $this->id_auxiliar;
	}

	function get_Encargado(){
		return $this->encargado;
	}
	
        
	function set_id_actividad( $valor ){
		$this->id_actividad = $valor;
	}

	function set_id_auxiliar( $valor ){
		$this->id_auxiliar = $valor;
	}

	function set_Encargado ( $valor ){
		$this->encargado = $valor;
	}

}
?>
