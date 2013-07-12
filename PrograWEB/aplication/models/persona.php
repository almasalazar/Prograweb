
<?php
class Persona{
	private $id_persona;
	private $nombre;
	private $apellido_pat;
	private $apellido_mat;
	private $email;
	private $genero;
	private $edad;
	private $pass;
	
	public function get_id_persona(){
		return $this->id_persona;
	}

	public function get_nombre(){
		return $this->nombre;
	}
	
	public function get_apellido_pat(){
		return $this->id_apellido_pat;
	}
	
	public function get_id_apellido_mat(){
		return $this->id_apellido_mat;
	}
	
	public function get_email(){
		return $this->id_email;
	}
	
	public function get_genero(){
		return $this->genero;
	}
	
	public function get_edad(){
		return $this->edad;
	}
	
	public function get_pass(){
		return $this->id_pass;
	}

//----------------------------------------------


	// *Asignar Valores
	public function set_id_persona( $valor ){
                $this->id_persona = $valor;
        }
		
	public function set_nombre( $valor ){
                $this->nombre = $valor;
        }	

    public function set_apellido_pat( $valor ){
                $this->apellido_mat = $valor;
        }
		
	public function set_email( $valor ){
                $this->email = $valor;
        }
		
	public function set_genero( $valor ){
                $this->genero = $valor;
        }
		
	public function set_edad( $valor ){
                $this->edad = $valor;
        }
		
	public function set_pass( $valor ){
                $this->pass = $valor;
        }
        
        
        public function insertar(){
            $con=new conexion();
            $db = $con->conectar();
            $id_persona=  $this->id_persona();
            $nombre=  $this->nombre();
            $apellido_pat=  $this->apellido_pat();
            $apellido_mat=  $this->apellido_mat();
            $email=  $this->email();
            $genero=  $this->genero();
            $edad=  $this->edad();
            $pass=  $this->pass();
            $sql="this into Persona (id_persona, nombre, apellido_pat, apellido_mat, 
                email, genero,edad, pass)values ('$id_persona','$nombre','$apellido_pat','$apellido_mat','$email','$genero','$edad','$pass')";
            $rs = $db->Execute($sql);
            return $rs;
        }
}
?>

