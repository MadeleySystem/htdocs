<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
    session_start();
    if (isset($_SESSION['cont'])) {
        
        //Imprimo su valor
        echo "<h1>El cont tiene el valor de :".$_SESSION['cont']." y su contenido fue borrado</h1>";
        unset($_SESSION['cont']);
		session_destroy();

    }
    else {
         echo "<h1>No existe variable definida</h1>";
    }
   
    

?> 
    <br>
    <a href="index.php">Regresar</a><br>
</body>
</html>