<?php
$conex = mysqli_connect("localhost", "root", "", "registro");

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
} 
?>
