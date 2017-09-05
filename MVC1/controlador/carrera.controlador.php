<?php
class carreracontrolador {
	public $id;
	public $accion;
	
	public $error;
	public $objeto;
	
	function __construct(){
		try{
			if(file_exists("modelo/carrera.class.php")){
				//incluir la clase
				include("modelo/carrera.class.php");
				$this->objeto= new carrera();
			}else{
				$this->error="no se puede localizar el objeto seleccionado";
			}
			
		}
		catch(Exception $e){
			$this->error=$e->getMessage();
		}
		
	}//Fin construct
	function listar(){
		$data=$this->objeto->listar();
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/carrera/listar.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function ver(){
		$obj=$this->objeto->buscar($this->id);
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/carrera/form.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function nuevo(){
		//Debemos obtener todas las carreras
		$obj=$this->objeto;
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/carrera/form.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function actualizar(){
		//Debemos obtener todas las carreras
		$obj=$this->objeto->buscar($this->id);
		if($obj){

			//Llamamos al encabezado
			include("vista/header.php");
			//Cuerpo de la Pagina
			include("vista/carrera/form.php");
			//Pie de la pagina
			include("vista/footer.php");
			
		} else {
			echo "error: usuario no localizado";
		}
		
	}
	function eliminar(){
		
	}
	
	
	
}
?>