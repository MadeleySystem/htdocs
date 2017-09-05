<?php
include_once('database.class.php');

class complejo extends database{
    
    public $id_complejo;
	public $Tparque;
	public $administracion;
	public $activos;
   
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
			$sql="insert into complejo(id_complejo, Tparque, administracion, 
			activos) values ( ?,?,?,?)";
			$stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['id_complejo'],
				$data['Tparque'],
				$data['administracion'],
				$data['activos']
								
			));
			
		}catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function eliminar($id){
		try{
			$sql="delete from complejo where  id_complejo=?";
			$stmt=$this->con->prepare($sql);
			$stmt->execute(array($id));	
			
		}	catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
	
	public function buscar($id){
		try 
		{
			$sql="select * from complejo where id_complejo=?";
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
			$sql="select * from complejo";
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
			$sql="Update complejo set id_complejo=?, Tparque=?, 
			administracion=?, activos=? 
				Where id_complejo=?";
            $stmt=$this->con->prepare($sql);			
			$stmt->execute(array(
				$data['id_complejo'],
				$data['Tparque'],
				$data['administracion'],
				$data['activos'],
                $data['id_complejo']
			));
			
		} catch(PDOException $e){
			$this->error=$e->getMessage();
		}
	}
}?>