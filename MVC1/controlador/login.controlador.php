<?php
class logincontrolador {
	public $id;
	public $accion;
	public $nombre;
	public $error;
	public $passw;
	public $objeto;
	
	function __construct(){
	}
	//Fin construct
	function listar(){
	}
	function ver(){	
	}
	function nuevo(){	
	}
	function actualizar(){	
	}
	function eliminar($id){	
	}
	/**Método Guardar **/
	function guardar(){
	}
	
	function log(){
		include("vista/header.php");
		include("vista/login/login.php");
		include("vista/footer.php);
		
	}
	
	function logout(){
		session_destroy();
		header("location:".BASE_URL."alumno");
	}
	function registrar(){
		$_SESSION['id_user']=1;
		header("location:".BASE_URL."alumno");
	}

}
?>