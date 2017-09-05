<?php
include_once("database.class.php");

class complejo extends database{

	public $Tparque;
	public $Ubicacion;
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
			$sql="insert into complejo(Ubicacion,Tparque, activo) 
			values ( ?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['Tparque'],
				$data['Ubicacion'],
				$data['activo']				
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
			echo $this->error;
		}
	}
	
	public function eliminar($idcomplejo){
		try{
			$sql="delete from complejo where  idcomplejo=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($idcomplejo));	
			
		}	catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function buscar($id){
		try 
		{
			$sql="select * from complejo where id=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));
			
			//Regresa solamente un elemento como un objeto
			return $stmt->fetch(PDO::FETCH_OBJ);
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	public function listar(){
		try 
		{
			$sql="select * from complejo";
			$stmt=$this->con->prepare($sql);
			$stmt->execute();
			
			//Regresa solamente un elemento como un objeto
			return $stmt->fetchAll(PDO::FETCH_OBJ);
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	public function actualizar($data){
		try{
			$sql="Update complejo set Ubicacion =?, Tparque=?, 
				Where activo=?";
            $stmt=$this->con->prepare($sql);
			$stmt->execute(array(
				$data['Ubicacion'],
				$data['Tparque'],
				$data['activo']
				
				
			));
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
public function guardar($data){
		try{
			$sql="insert into complejo(Tparque, activo) 
			values (?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['Tparque'],
				$data['activo']
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
}




?>