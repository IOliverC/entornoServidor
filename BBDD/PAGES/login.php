<?php
session_start();

function redirectToIndex($message) {
    $_SESSION["error_message"] = $message;
    header("Location: index.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "admin" && $password == "1234") {
            $_SESSION["loggedin"] = true;
            $_SESSION["timestamp"] = date("Y-m-d H:i:s");
            $_SESSION["role"] = "admin";
            header("Location: dashboard.php");
            exit();
        } elseif ($username == "cliente1" && $password == "1234") {
            $_SESSION["loggedin"] = true;
            $_SESSION["timestamp"] = date("Y-m-d H:i:s");
            $_SESSION["role"] = "cliente";
            header("Location: dashboard.php");
            exit();
        } else {
            redirectToIndex("Credenciales incorrectas.");
        }
    } else {
        redirectToIndex("Credenciales incorrectas.");
    }
}

if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="../Css/resultado.css">
</head>
<body>

<div class="todo">
    <?php
    if (isset($_SESSION["error_message"])) {
        echo "<h2>{$_SESSION["error_message"]}</h2>";
        unset($_SESSION["error_message"]);
    }
    ?>
</div>

<div class="bo1">
    <a href="index.html" class="boton">Volver</a>
</div>

</body>
</html>
