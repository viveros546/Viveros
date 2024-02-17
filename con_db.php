<?php
$host = "localhost";
$user = "root";
$pass = "contraseña";
$database = "registro";

$conex = mysqli_connect($host, $user, $pass, $database);

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
