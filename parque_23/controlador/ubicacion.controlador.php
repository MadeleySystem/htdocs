<?php
class ubicacioncontrolador {
	public $id;
    public $id_ubicacion;
	public $accion;
	public $complejo;
	public $error;
	public $objeto;
	
	function __construct(){
		try{
			if(file_exists("modelo/ubicacion.class.php")){
				//incluir la clase
				include("modelo/ubicacion.class.php");
				$this->objeto= new ubicacion();
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
		include("vista/ubicacion/listar.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function ver(){
		$obj=$this->objeto->buscar($this->id);
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/ubicacion/form.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function nuevo(){
		//Debemos obtener todas las carreras
		$this->getComplejo();
		$obj=$this->objeto;
		//Llamamos al encabezado
		include("vista/header.php");
		//Cuerpo de la Pagina
		include("vista/ubicacion/form.php");
		//Pie de la pagina
		include("vista/footer.php");
		
	}
	function actualizar(){
		//Debemos obtener todas las carreras
		$this->getComplejo();
		$obj=$this->objeto->buscar($this->id);
		if($obj){

			//Llamamos al encabezado
			include("vista/header.php");
			//Cuerpo de la Pagina
			include("vista/ubicacion/form.php");
			//Pie de la pagina
			include("vista/footer.php");
			
		} else {
			echo "error: usuario no localizado";
		}
		
	}
	function eliminar($id){
		$obj=$this->objeto->buscar($this->id);
		if($obj){
			$this->objeto->eliminar($this->id);
			echo 1; //Si encontro el ID
			
		} else {
			echo "error: usuario no localizado";
		}
		
		
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
	}
	
/**Método Guardar**/
	function guardar(){
		//Si existe el ID es una actualizacion, de lo contrario es una inserción
		$obj=$this->objeto->buscar($_POST['id_ubicacion']); //Recuperamos los datos del registro
		if($obj){ //Si se localiza se llama al metodo actualizar
			//Los datos se envian por el $_POST
			$this->objeto->actualizar($_POST);
			$this->error="Actualización satisfactoria";
			
			
		} else{
			//Los datos se envian por el $_POST
			$this->objeto->insertar($_POST);
			$this->error="Registro creado satisfactoriamente";
			
		}
		$this->getMensaje();
	}
	
	function getubicacion(){
		try{
			if(file_exists("modelo/ubicacion.class.php")){
				//incluir la clase
				include("modelo/ubicacion.class.php");
				$tempC=new ubicacion();
				$this->ubicacion= $tempC->listar();
				
			}else{
				$this->error="No se pudo localizar el director";
			}
			
		}
		catch(Exception $e){
			$this->error=$e->getMessage();
		}
	}
	/*Esta ventana es para mostrar cuando exista un error en el modelo alumno*/
	function getMensaje(){
			$mod="complejo"; //Se guarda el nombre del modelo actual
			//Llamamos al encabezado
			include("vista/header.php");
			//Cuerpo de la Pagina
			include("vista/mensaje.php");
			//Pie de la pagina
			include("vista/footer.php");
			
	}
	
}
?>