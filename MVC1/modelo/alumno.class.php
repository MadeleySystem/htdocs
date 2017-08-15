<?php
include "database.class.php";

class alumno extends database{
	public $matricula;
	public $nombre;
	public $fecha_nac;
	public $sexo;
	public $carrera;
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
			$sql="insert into alumno(matricula, nombre, fecha_nac, 
			sexo, carrera) values ( ?,?,?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['matricula'],
				$data['nombre'],
				$data['fecha_nac'],
				$data['sexo'],
				$data['carrera']				
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function eliminar($id){
		try{
			$sql="delete from alumno where  matricula=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));	
			
		}	catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function buscar($id){
		try 
		{
			$sql="select * from alumno where matricula=?";
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
			$sql="select * from alumno";
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
			$sql="Update alumno set matricula=?, nombre=?, 
			fecha_nac=?, sexo=?, carrera=?
				Where matricula=?";
            $stmt=$this->con->prepare($sql);
			$stmt->execute(array(
				$data['matricula'],
				$data['nombre'],
				$data['fecha_nac'],
				$data['sexo'],
				$data['carrera'],
				$data['matricula']
				
			));
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
}?>