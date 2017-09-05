<?php


class complejo extends database{
	public $nombre;
	public $ubicacion;
	public $horario;
	
	public $con;
	public $error;
	
	function __construct(){
		try{
			$this->con=database::startup();			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function insertar($data){
		try{
			$sql="insert into carrera(nombre, ubicacion, horario) values ( ?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['nombre'],
				$data['ubicacion'],
				$data['horario']				
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function eliminar($id){
		try{
			$sql="delete from nombre where  horario=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));	
			
		}	catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function buscar($id){
		try 
		{
			$sql="select * from nombre where ubicacion=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));
			
			//Regresa solamento un elemento como un objeto
			return $stmt->fetch(PDO::FETCH_OBJ);
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	public function listar(){
		try 
		{
			$sql="select * from nombre";
			$stmt=$this->con->prepare($sql);
			$stmt->execute();
			
			//Regresa solamento un elemento como un objeto
			return $stmt->fetchAll(PDO::FETCH_OBJ);
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	public function actualizar($data){
		try{
			$sql="Update carrera set clave=?, nombre=?, 
			activo=?
				Where clave=?";
            $stmt=$this->con->prepare($sql);
			$stmt->execute(array(
				$data['nombre'],
				$data['ubicacion'],
				$data['horario'],
			));
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
}




?>