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
			<a class="navbar-brand" href="#"><b>MVC2</b></a>
		</div>
	
		<ul class="nav navbar-nav">
            <button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>complejo'">Complejo</button>
			<button type="button" class="btn btn-default" onClick="location.href='<?php echo BASE_URL;?>ubicacion'"> Ubicacion</button>
        
			
        
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign up</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>login</a></li>
		</ul>
	</div>	
</nav>










