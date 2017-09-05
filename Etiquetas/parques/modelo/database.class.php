<?php
/**
 * Clase que imprelemnta el obj PDO para abrir y cerrar la conexión a la bd
  * @param conn conserva el objeto a la conexión de la base de datos
 * @param error conserva el error que se pusiera generar durante la ejecución del código.
 */
class database{
	public static function startup(){
		try{
			//
			$conn= new PDO("mysql:host=localhost;dbname=ti32;charset=utf8",
						   "root","");
			//
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			return $conn;

		} catch( PDOException $e){

		}
	}
}


?>









