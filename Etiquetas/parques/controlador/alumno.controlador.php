<?php
class alumnocontrolador {
	public $id;
	public $accion;
	public $carreras;
	public $error;
	public $objeto;
	
	function __construct(){
		try{
			if(file_exists("modelo/tipodeparque.class.php")){
				//incluir la clase
				include("modelo/tipodeparque.class.php");
				$this->objeto= new nombre();
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
		include("vista/tipodeparque/listar.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function ver(){
		$obj=$this->objeto->buscar($this->id);
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/tipodeparque/form.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function nuevo(){
		//Debemos obtener todas las carreras
		$this->getCarreras();
		$obj=$this->objeto;
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/tipodeparque/form.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function actualizar(){
		//Debemos obtener todas las carreras
		$this->getCarreras();
		$obj=$this->objeto->buscar($this->id);
		if($obj){

			//Llamamos al encabezado
			include("vista/header.php");
			//Cuerpo de la Pagina
			include("vista/tipodeparque/form.php");
			//Pie de la pagina
			include("vista/footer.php");
			
		} else {
			echo "error: usuario no localizado";
		}
		
	}
	function eliminar(){
		
	}
	
	
	function getCarreras(){
		try{
			if(file_exists("modelo/complejo.class.php")){
				//incluir la clase
				include("modelo/complejo.class.php");
				$tempC=new parque();
				$this-> parque= $tempC->listar();
				
			}else{
				$this->error="No se pudo localizar las careras";
			}
			
		}
		catch(Exception $e){
			$this->error=$e->getMessage();
		}
	}
	
}
?>