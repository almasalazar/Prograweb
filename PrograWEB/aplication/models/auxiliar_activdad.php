/*************************************************************
          Modelado Tabla auxiliar_actividad.php
**************************************************************/



// *Variables Globales Privadas
<?php
	private $id_actividad;
	private $id_auxiluar;
	private $Encargado;
?>
//-------------------------------------------------



// *Modelado
<?php


	// *Obtener Datos
	function get_id_actividad(){
		return this->$id_actividad;
	}

	function get_id_auxiliar(){
		return this->$id_auxiliar;
	}

	function get_Encargado(){
		return this->$Encargado;
	}
	//-----------------------------------------



	// *Asignar Datos
	function set_id_actividad( $valor ){
		this->$id_actividad = $valor;
	}

	function set_id_auxiliar( $valor ){
		this->$id_auxiliar = $valor;
	}

	function set_Encargado ( $valor ){
		this->$Encargado = $valor;
	}
	//------------------------------------------


?>
//-------------------------------------------------
