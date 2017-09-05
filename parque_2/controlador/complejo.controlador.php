<?php
class complejocontrolador {
	public $idcomplejo;
	public $Tparque;
	public $admnistracion;
	public $activo;
	public $accion;
	public $error;
	public $objeto;
	
	function __construct(){
		try{
			if(file_exists("modelo/complejo.class.php")){ 
				//incluir la clase
				include("modelo/complejo.class.php");
				$this->objeto= new complejo();
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
		include("vista/complejo/listar.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function ver(){
		$obj=$this->objeto->buscar($this->idcomplejo);
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/complejo/form.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function nuevo(){
		
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/complejo/nuevo.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function editar(){
		$lista=$this->objeto->lista_desplegable();
		$obj=$this->objeto->buscar($this->idcomplejo);
		if($obj){
			//Llamamos al encabezado
			include("vista/header.php");
			//Cuerpo de la Pagina
			include("vista/complejo/nuevo.php");
			//Pie de la pagina
			include("vista/footer.php");
			
		} else {
			echo "error: complejo no localizado";
		}
	
      function editar2(){
		$lista = $this->objeto->lista_desplegable();
		$obj=$this->objeto->buscar($this->idcomplejo);
		if($obj){
			//Llamamos al encabezado
			include("vista/header.php");
			//Cuerpo de la Pagina
			include("vista/complejo/form.php");
			//Pie de la pagina
			include("vista/footer.php");
			
		} else {
			echo "error: complejo no localizado";
		}
		
	
	}
	function eliminar($idcomplejo){
		$obj=$this->objeto->buscar($this->idcomplejo);
		if($obj){
			$this->objeto->eliminar($this->idcomplejo);
			echo 1; //Si encontro el ID
			
		} else {
			echo "error: usuario no localizado";
		}
		
		
	}
	
	
	/**Método Guardar**/
	function guardar(){
		
		$obj=$this->objeto->buscar($_POST['idcomplejo']); //Recuperamos los datos del registro
		if($obj){ 
			//Los datos se envian por el $_POST
			$this->objeto->actualizar($_POST);
				include("vista/ubicacion/nuevo.php");
			$this->error="Actualización satisfactoria";
			
			
		} else{
			//Los datos se envian por el $_POST
			$this->objeto->insertar($_POST);
				include("vista/ubicacion/nuevo.php");
			$this->error="Registro creado satisfactoriamente satisfactoria";
			
		}
		$this->getMensaje();
	}
	
	function getcomplejo(){
		try{
			if(file_exists("modelo/complejo.class.php")){
				//incluir la clase
				include("modelo/complejo.class.php");
				$tempC=new complejo();
				$this->complejo= $tempC->listar();
				
			}else{
				$this->error="No se pudo localizar las carreras";
			}
			
		}
		catch(Exception $e){
			$this->error=$e->getMessage();
		}
		
		catch(Exception $e){
			$this->error=$e->getMessage();
		}
	}
	/*Esta ventana es para mostrar cuando exista un error en el modelo complejo*/
	function getMensaje(){
			$mod="ubicacion"; //Se guarda el nombre del modelo actual
			//Llamamos al encabezado
			include("vista/header.php");
			//Cuerpo de la Pagina
			include("vista/mensaje.php");
			//Pie de la pagina
			include("vista/footer.php");
	}
			
	}
	
}
?>