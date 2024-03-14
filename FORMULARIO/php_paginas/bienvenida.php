<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("please, log in");
        window.location= "../index.php";
    </script>
    ';
    session_destroy();
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido mi Rey</h1>
    <a href="php_datos_db/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>