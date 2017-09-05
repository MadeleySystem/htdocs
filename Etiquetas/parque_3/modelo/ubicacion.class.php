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
			$sql="insert into ubicacion(id_ubicacion,nombre,direccion,horarios, 
			) values ( ?,?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['id_ubicacion'],
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
			$sql="delete from ubicacion where  id_ubicacion=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));	
			
		}	catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function buscar($id){
		try 
		{
			$sql="select * from ubicacion where id_ubicacion=?";
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
			$sql="Update ubicacion set id_ubicacion=?, nombre=?, 
			direccion=?, horarios=?
				Where id_ubicacion=?";
            $stmt=$this->con->prepare($sql);
			$stmt->execute(array(
				$data['id_ubicacion'],
				$data['nombre'],
				$data['direccion'],
				$data['horarios'],
                $data['id_ubicacion']
				
				
			));
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
}?>