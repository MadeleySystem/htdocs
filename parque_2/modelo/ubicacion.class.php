<?php
include "database.class.php";

class ubicacion extends database{
	public $id; 
	public $nombre;
	public $direccion;
	public $horarios;
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
			$sql="insert into ubicacion(id,nombre,direccion,horarios, 
			) values ( ?,?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['id'],
				$data['nombre'],
				$data['direccion'],
				$data['horarios']
							
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function eliminar($id){
		try{
			$sql="delete from ubicacion where id=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));	
			
		}	catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function buscar($id){
		try 
		{
			$sql="select * from ubicacion where id=?";
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
			$sql="select * from ubicacion";
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
			$sql="Update ubicacion set id=?, nombre=?, 
			direccion=?, horarios=?
				Where id=?";
            $stmt=$this->con->prepare($sql);
			$stmt->execute(array(
				$data['id'], 
				$data['nombre'],
				$data['direccion'],
				$data['horarios']
				
				
			));
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}


	public function guardar($data){
		try{
			$sql="insert into ubicacion (id, nombre, 
			direccion,horarios,) values ( ?,?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['id'],
				$data['nombre'],
				$data['direccion'],
				$data['horarios']
						
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
}?>