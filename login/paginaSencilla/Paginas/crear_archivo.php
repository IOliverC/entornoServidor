<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Archivo</title>
    <link rel="stylesheet" href="../Css/nuevo.css">
</head>
<body>

<div class="wrapper">
    <div class="form-box login">
            <h2>Crear un Nuevo Archivo</h2>
            <form action="guardar_archivo.php" method="post"> <!--Se inicia formulario que se envia los datos a guardar_archivo.php  -->
            <div class="input-box">
                    <input type="text" id="username" name="username" required>
                    <label>Nombre del archivo</label>
                </div>
                <div class="input-box">
                    <input type="textarea" id="content" name="content" required></input>
                    <label>Contenido</label>
                </div>
                <button type="submit" class="btn">Guardar archivo </button>
            </form>
            <div class="bo1">
                <a href="opciones.php" class="boton">Volver a ver todas las opciones</a> <!--Al pulsar se envía.  -->
            </div>
    </div>
</div>
    <script src="../JavaScript/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
