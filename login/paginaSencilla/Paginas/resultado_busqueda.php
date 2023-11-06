<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../Css/resultado.css">
</head>
<body>
<div class="todo">
        <h2>Archivo encontrado</h2> <br><br>
</div> 

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //si se envio el formulario entonces
    $nombre_archivo = $_POST['nombre_archivo']; //guarda el nombre del archivo creado.
    
    if (file_exists($nombre_archivo)) { //si el nombre del archivo existe entonces...
        ?>
        <div class="esta">
            <p><?php echo "El archivo " . $nombre_archivo . " existe.<br>"; ?></p> <!--Existe -->
        </div>
        <?php
        $contenido = file_get_contents($nombre_archivo);  //Lee el contenido y lo almacena en la variable
        ?>
        <div class="contenido">
            <p><?php echo "El contenido del archivo es:<br>" . $contenido; ?></p> <!--Muestra el contenido -->
        </div>
        <?php
    } else { //si no se encuentra el archivo.
        ?>
        <div class="esta">
            <p><?php echo "El archivo " . $nombre_archivo . " no existe.<br>"; ?></p> <!--No existe -->
        </div>
        <?php
    }
}
?>
    <div class="bo">
        <a href="opciones.php" class="boton">Volver a ver todas las opciones</a>
    </div>
</body>
</html>
