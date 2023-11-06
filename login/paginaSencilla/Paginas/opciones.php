<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opciones del Usuario</title>
    <link rel="stylesheet" href="../Css/styleOpciones.css">
</head>
<body>

<?php
    
session_start(); 

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) { 
    header("Location: index.html"); // Redirige al usuario a la página de inicio si no ha iniciado sesión
    exit();
}

?>
<div class="todo">
        <h2>Bienvenidx, admin!</h2> <br><br>
        <p>Fecha y hora de acceso: <?php echo $_SESSION["timestamp"]; ?> </p> <!-- Indica la fecha y hora de el loggin por parte del usuario-->
        <h3>Opciones:</h3>
        <div class="wrapper">
            <ul> <!-- lista que contiene un enlace a otra página PHP.-->
                <li><a href="ruta_actual.php">Obtener Ruta Actual</a></li>
                <li><a href="buscar_archivo.php">Buscar un Fichero</a></li>
                <li><a href="crear_archivo.php">Crear un Nuevo Fichero</a></li>
            </ul>
        <div> 
</div>
    <div class="bo">
        <a href="index.html" class="boton">Cerrar sesión</a> <!-- Cerrar sesion.-->
    </div>
</body>
</html>



