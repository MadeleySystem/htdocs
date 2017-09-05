<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link type="text/css" rel="stylesheet" media="all" 
href="<?php echo BASE_URL;?>resources/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" media="all"
href="<?php echo BASE_URL;?>resources/css/style.css">
	</head>

<body>
<nav class="navbar">
	<div class="container-fluid">
		<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle nav</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">MVC 1</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo BASE_URL ;?>Alumno">Alumnos</a></li>
				<li><a href="<?php echo BASE_URL ;?>Carrera">Carreras</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>login</a></li>
			</ul>
		</div>
	</div>	
</nav>










