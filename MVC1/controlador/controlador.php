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
		$this->modelo=(!empty($args[0])?$args[0]:'home');
		$this->accion=(!empty($args[1])?$args[1]:'listar');
		$this->id=(!empty($args[2])?$args[2]:null);
		
		//Incluir el modelo
		if(file_exists("controlador/".$this->modelo.".controlador.php")){
			include("controlador/".$this->modelo.".controlador.php");
			$controlador=$this->modelo."controlador";
			$controlador = new $controlador();
			
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
			echo "<b>Fatal error:</b> Acceso Denegado";
		}//Cierre If
	} //Cierre metodo
	
}//CIerre clase?>