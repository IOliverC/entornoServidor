<?php
session_start();
include 'conexion.php';

// Verificar si el usuario está autenticado y tiene el rol de administrador
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "admin") {
    header("Location: index.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];

    // Validación y sanitización de datos (agrega según tus necesidades)

    // Inserción en la base de datos con prepared statement
    $sql = "INSERT INTO personajes (nombre, descripcion) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nombre, $descripcion);  // "ss" indica que ambos son strings
    if ($stmt->execute()) {
        echo "Personaje agregado correctamente";
    } else {
        echo "Error al agregar personaje: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Personaje</title>
    <link rel="stylesheet" href="../Css/eliminarAñadir.css">
</head>
<body>
<div class="wrapper">
    <div class="form-box login">
    <h2>Agregar Personaje</h2>

    <form method="post" action="">
    <div class="input-box">
        <input type="text" name="nombre" required>
        <label for="nombre">Nombre:</label>
    </div>
    <div class="input-box">
        <input type="text" name="descripcion" required>
        <label for="descripcion">Descripción:</label>
    </div>
        <button type="submit" class="btn">Agregar</button>
    </form>
    <div class="bo">
        <a href="dashboard.php" class="boton1">Volver al Dashboard</a>
    </div>

</body>
</html>
