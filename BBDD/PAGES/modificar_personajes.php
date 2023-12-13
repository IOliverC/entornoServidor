<?php
session_start();
include 'conexion.php';

// Verificar si el usuario está autenticado y tiene el rol de admin
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true || $_SESSION["role"] !== "admin") {
    header("Location: index.html");
    exit();
}

$nombre_actual = "";
$descripcion_actual = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el ID del personaje
    $id = $_POST["id"];

    // Consultar los datos actuales con prepared statement
    $sql_select = "SELECT nombre, descripcion FROM personajes WHERE id = ?";
    $stmt_select = $conn->prepare($sql_select);
    $stmt_select->bind_param("i", $id);  // "i" indica que el valor es un entero
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    // Verificar si se encontraron resultados
    if ($result->num_rows > 0) {
        // Obtener los datos del resultado
        $row = $result->fetch_assoc();
        $nombre_actual = $row["nombre"];
        $descripcion_actual = $row["descripcion"];

        // Procesar la modificación del personaje con prepared statement
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];

        $sql_update = "UPDATE personajes SET nombre=?, descripcion=? WHERE id=?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ssi", $nombre, $descripcion, $id);  // "ssi" indica que los primeros dos son strings y el tercero es un entero
        if ($stmt_update->execute()) {
            echo "Personaje modificado correctamente";

            header("refresh:0;url=dashboard.php");
        } else {
            echo "Error al modificar personaje: " . $stmt_update->error;
        }

        $stmt_update->close();
    } else {
        echo "No se encontró el personaje con el ID proporcionado.";
        exit();
    }

    $stmt_select->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Personaje</title>
    <link rel="stylesheet" href="../Css/eliminarAñadir.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Modificar Personaje</h2>

            <form method="post" action="">
                <div class="input-box">
                    <input type="number" name="id" required>
                    <label for="id">ID del Personaje a Modificar:</label>
                </div>
                <div class="input-box">
                    <input type="text" name="nombre" value="<?php echo $nombre_actual; ?>" required>
                    <label for="nombre">Nombre:</label>
                </div>
                <div class="input-box">
                    <input type="text" name="descripcion" value="<?php echo $descripcion_actual; ?>" required>
                    <label for="descripcion">Descripción:</label>
                </div>
                <button type="submit" class="btn">Modificar</button>
            </form>
            <div class="bo">
                <a href="dashboard.php" class="boton1">Volver al Dashboard</a>
            </div>
        </div>
    </div>
</body>
</html>
