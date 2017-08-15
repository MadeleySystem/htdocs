<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<?php
    session_start();
    if (isset($_SESSION['contador'])) {
        $_SESSION['contador']++;
    }
    else {
        $_SESSION['contador'] = 0;
    }
    echo "<h1>El contador tiene el valor de :".$_SESSION['contador']."</h1>";
?> 
    <br>
    <a href="index.php">Regresar</a>
</body>
</html>