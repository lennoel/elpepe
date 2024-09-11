
<?php
include("conexion.php");

if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
} else {
    echo "Conexión exitosa a la base de datos.";
}
?>
