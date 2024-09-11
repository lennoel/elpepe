<?php
include("conexion.php");

// Función para validar y sanear los datos
function validarDatos($dato) {
    $dato = trim($dato);
    $dato = stripslashes($dato);
    $dato = htmlspecialchars($dato);
    return $dato;
}



// Comprobar si el formulario ha sido enviado
if (isset($_POST['register'])) {
    // Validar y sanear datos del formulario
    $name = validarDatos($_POST['name']);
    $email = validarDatos($_POST['email']);
    $direccion = validarDatos($_POST['direccion']);
    $phone = validarDatos($_POST['phone']);
    $password = validarDatos($_POST['password']);
    $fecha = isset($_POST['fecha']) ? validarDatos($_POST['fecha']) : null;

    // Preparar la consulta SQL (sin el campo id porque es AUTO_INCREMENT)
    $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, contraseña,fecha) VALUES ('$name', '$email', '$direccion', '$phone', '$password','$fecha')";

    // Ejecutar la consulta
    if (mysqli_query($conex, $consulta)) {
        echo "Persona agregada correctamente.";
    } else {
        echo "Error al agregar persona: " . mysqli_error($conex);
    }
}

// Cerrar la conexión
mysqli_close($conex);
?>
