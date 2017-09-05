<?php
class controlador {
	public $modelo;
	public $accion;
	public $id;
	public $error;
	public $objeto;
	
	function __construct(){
		//
		$args=explode("/",@$_GET['url']);
		$this->modelo=(!empty($args[0])?$args[0]:'complejo');
		$this->accion=(!empty($args[1])?$args[1]:'listar');
		$this->id=(!empty($args[2])?$args[2]:null);
		
		//sintaxis larga del if
		/*if($args[0] == "")
		{
			$this->modelo = "home";
		}else
		{
			$this->modelo = $args[0];
		}*/

		//Incluir el modelo
			if(file_exists("controlador/".$this->modelo.".controlador.php")){
			include($this->modelo.".controlador.php");
			//include(ubicacion.controlador.php)
			$controlador=$this->modelo."controlador";//Nombre de la clase del archivo que se incluye en la linea anterior
			//$controlador = ubicacioncontrolador
			$controlador = new $controlador();//Se crea el objeto (Instancia de la clase)
			//ubicacioncontrolador = new ubicacioncontrolador();
			
			$controlador->id=$this->id;
			$controlador->accion=$this->accion;
			
			//Condición para buscar un metodo válido
			if(method_exists($controlador,$this->accion)){
				if($this->id==null){
					$controlador->{$this->accion}();
				} else {
					$controlador->{$this->accion}($this->id);
				}
			} else {
				echo "<h1>Error: Acceso a una acción inexistente</h1>";    
			}
		} else{
			echo "<b>Fatal error:</b> No se encontro el archivo: "."'"."controlador/".$this->modelo.".controlador.php"."'";
		}//Cierre If
	} //Cierre metodo
	
}//CIerre clase?>