<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudprueba";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Configurar el conjunto de caracteres a utf8
$conn->set_charset("utf8");
?>