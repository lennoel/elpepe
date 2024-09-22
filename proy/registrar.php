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

    // Hashear la contraseña antes de almacenarla
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Preparar consulta para verificar si el correo electrónico ya existe
    $consulta = $conex->prepare("SELECT email FROM cliente WHERE email = ?");
    $consulta->bind_param("s", $email);
    $consulta->execute();
    $consulta->store_result();

    if ($consulta->num_rows > 0) {
        // Correo ya registrado
        echo "<p style='color: red;'>El correo electrónico ya está registrado.</p>";
    } else {
        // Preparar la consulta SQL con declaraciones preparadas
        $consulta = $conex->prepare("INSERT INTO cliente (nombre, email, direccion, telefono, contraseña, fecha) VALUES (?, ?, ?, ?, ?, ?)");
        $consulta->bind_param("ssssss", $name, $email, $direccion, $phone, $hashed_password, $fecha);

        // Ejecutar la consulta
        if ($consulta->execute()) {
            echo "<p style='color: green;'>Persona agregada correctamente.</p>";
        } else {
            echo "<p style='color: red;'>Error al agregar persona: " . $conex->error . "</p>";
        }
    }

    // Cerrar la consulta
    $consulta->close();
}

// Cerrar la conexión
$conex->close();
?>



