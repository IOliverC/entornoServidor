<?php
session_start();
include 'conexion.php';

// Verificar si el usuario está autenticado
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: index.html");
    exit();
}

// Consultar los personajes con prepared statement
$sql = "SELECT id, nombre, descripcion FROM personajes";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../Css/styleOpciones.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
    <div class="input-box">
        <a href="index.html" class="icono">
            <ion-icon name="log-out-outline"></ion-icon>
        </a>
    </div>
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
        <div class="row w-75 md-4">
            <h2>Bienvenidx, admin!</h2>
            <p>Fecha y hora de acceso: <?php echo $_SESSION["timestamp"]; ?> </p>
            <div class="bo">
                <a href="agregar_personaje.php" class="btn">Agregar Personaje</a>
                <a href="eliminar_personaje.php" class="btn">Eliminar Personaje</a>
                <a href="modificar_personajes.php" class="btn">Modificar Personaje</a>
            </div>
        </div>
        <div class="row w-75 p-4">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["nombre"] . "</td>";
                                echo "<td>" . $row["descripcion"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='3'>No hay personajes.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
