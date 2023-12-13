<?php
session_start();
include 'conexion.php';

// Verificar si el usuario está autenticado y tiene el rol de admin
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "admin") {
    header("Location: index.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe el ID del personaje a eliminar
    $personaje_id = $_POST["personaje_id"];


    // Eliminación en la base de datos con prepared statement
    $sql = "DELETE FROM personajes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $personaje_id);  // "i" indica que el valor es un entero
    if ($stmt->execute()) {
        echo "Personaje eliminado correctamente";
    } else {
        echo "Error al eliminar personaje: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Personaje</title>
    <link rel="stylesheet" href="../Css/eliminarAñadir.css">
</head>
<body>

<div class="wrapper">
    <div class="form-box login">
    <h2>Eliminar Personaje</h2>

    <form method="post" action="">
    <div class="input-box">
        
        <input type="number" name="personaje_id" required>
        <label for="personaje_id">ID del Personaje a Eliminar:</label>
        </div>
        <button type="submit" class="btn">Eliminar</button>
    </form>
    <div class="bo">
        <a href="dashboard.php" class="boton1">Volver al Dashboard</a>
    </div>
</body>
</html>
