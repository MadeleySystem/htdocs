<?php
include "database.class.php";

class tipodeparques extends database{
	public $Nombre;
	public $tipoParque;
	public $Activo
	
	
	function __construct(){
		try{
			$this->con=database::startup();			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function insertar($data){
		try{
			$sql="insert into tipodeparque(Nombre, TipoParque, Activo) values ( ?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['Nombre'],
				$data['TipoParque'],
				$data['Activo'],
								
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function eliminar($id){
		try{
			$sql="delete from alumno where  Nombre=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));	
			
		}	catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function buscar($id){
		try 
		{
			$sql="select * from Nombre where TipoParque=?";
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
			$sql="select * from Nombre";
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
			$sql="Update Nombre set TipoParque=?, Nombre=?, Activo?, Where tipoParque=?";
            $stmt=$this->con->prepare($sql);
			$stmt->execute(array(
				$data['Nombre'],
				$data['TipoParque'],
				$data['Activo'],
				
				
			));
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
}?>