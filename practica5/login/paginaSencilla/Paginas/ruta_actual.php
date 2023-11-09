
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruta actual</title>
    <link rel="stylesheet" href="../Css/styleOpciones.css">
</head>
<body>

    <div class="todo">
        <h2 id=>Ruta actual</h2> <br><br>
            <div class="ruta">
                <?php
                    $directorio_actual = getcwd(); //devuelve el directorio actual guardando eso en la variable deseada.
                    echo " $directorio_actual"; //imprime por pantalla el directorio actual
                ?>
            </div>
            <div class="bo1">
                <a href="opciones.php" class="boton">Volver a ver todas las opciones</a>
            </div>
    </div>

</body>
</html>