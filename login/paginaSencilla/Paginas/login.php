<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="../Css/resultado.css">
</head>
<body>

<?php

session_start();

    if (isset($_POST["username"]) && isset($_POST["password"])) {  //si la variable username y password está, hace lo siguiente
        if ($_POST["username"] == "admin" && $_POST["password"] == "1234"){ //si username es admin y la password es 1234, hace lo siguiente
            $_SESSION["loggedin"] = true; //si la variable loggedin es verdadera rastrea si el usuario inicio sesion
            $_SESSION["timestamp"] = date("Y-m-d H:i:s"); //variable que devuelve la fecha.
            header("Location: opciones.php"); // Redirige al usuario a la página del panel de control después de iniciar sesión correctamente
            exit();
        }else{
        ?>
        <div class="todo">
        <h2>Credenciales incorrectas.</h2> <br><br>
        <?php

        }
    }

    if(isset($_GET["logout"])){
        session_destroy();
        header("Location: index.html"); // Redirige al usuario a la página de inicio después de cerrar sesión
        exit();
    }
?>
</div> 
<div class="bo1">
        <a href="index.html" class="boton">Volver</a> <!-- Btn para volver a la pagina inicial-->
</div>

</body>
</html>
