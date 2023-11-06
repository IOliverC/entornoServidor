<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Archivo</title>
    <link rel="stylesheet" href="../Css/nuevo.css">
</head>
<body>
<div class="wrapper">
    <div class="form-box login">
            <h2>Buscar un Archivo</h2>
            <form action="resultado_busqueda.php" method="post">
            <div class="input-box">
                    <input type="text" id="nombre_archivo" name="nombre_archivo" required><br>
                    <label for="nombre_archivo">Nombre del Archivo:</label>
                </div>
                <button type="submit" class="btn">Buscar archivo</button>
            </form>
            <div class="bo">
                <a href="opciones.php" class="boton">Volver a ver todas las opciones</a>
            </div>

    </div>
</div>
</body>
    <script src="../JavaScript/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
