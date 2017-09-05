<?php //Define ruta del proyecto 
	define("BASE_URL","http://localhost/mvc1/");
	include("controlador/controlador.php");
	session_start();
	
	if(!isset($_SESSION['id_user'])&&strcmp(strtolower(@$_GET['url']),"login/")<=0){
		$_GET['url']="login/log";//controlador 
		//header("location:".BASE_URL."login/login");
	}
	$controlador= new controlador();?>