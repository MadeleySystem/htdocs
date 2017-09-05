<?php
include_once('database.class.php');

class carrera extends database{
	public $clave;
	public $nombre;
	public $activo;
	
	
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
			$sql="insert into carrera(clave, nombre, activo
			) values ( ?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['clave'],
				$data['nombre'],
				$data['activo']				
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function eliminar($id){
		try{
			$sql="delete from carrera where  clave=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));
				
			
		}	catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function buscar($id){
		try 
		{
			$sql="select * from carrera where clave=?";
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
			$sql="select * from carrera";
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
				$data['clave'],
				$data['nombre'],
				$data['activo'],				
				$data['clave']
				
			));
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
}




?>