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
        $_SESSION['cont']++;
    }
    else {
        $_SESSION['cont'] = 1;
    }
    echo "<h1>El contador tiene el valor de :".$_SESSION['cont']."</h1>";
?> 
    <br>
    <a href="index.php">Regresar</a><br>
    <a href="close.php">Cerrar Sesion</a>
</body>
</html>