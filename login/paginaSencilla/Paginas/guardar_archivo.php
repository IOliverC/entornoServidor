<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo guardado</title>
    <link rel="stylesheet" href="../Css/styleOpciones.css">
</head>
<body>
<div class="todo">
        <h2>¿El archivo está creado?</h2> <br><br>
</div>
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_archivo = $_POST["username"]; //recoge el valor de username (nombre del archivo) y lo guarda
        $contenido = $_POST["content"]; //lo mismo con el contenido.
    
        $archivo = fopen($nombre_archivo, "w") or die("No se puede abrir/crear el archivo!"); //intenta abrir el archivo en modo escritura (w) que si no lo hace muestra un error.
    
        fwrite($archivo, $contenido); //escribe el contenido almacenado
    
        fclose($archivo); //cierra el archivo.
    ?>
    <p>Archivo guardado con éxito! </p>
    <?php
        
    } else {
        ?>
        <p>No se recibieron datos del formulario</p>
        <?php
    }
    ?>
            <div class="bo2">
                <a href="opciones.php" class="boton">Volver a ver todas las opciones</a>
            </div>
</body>
</html>
