<?php
include("conexion.php");

if (isset($_POST["register"])) {
    if (
        strlen($_POST["name"]) >= 1 &&
        strlen($_POST["email"]) >= 1 &&
        strlen($_POST["direccion"]) >= 1 &&
        strlen($_POST["phone"]) >= 1 &&
        strlen($_POST["password"]) >= 1 &&
        strlen($_POST["fecha"]) >= 1 // Asegúrate de incluir la fecha
    ) {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $direccion = trim($_POST["direccion"]);
        $phone = trim($_POST["phone"]);
        $password = trim($_POST["password"]);
        $fecha = $_POST["fecha"]; // Asegúrate de que esté usando la fecha seleccionada

        // Consulta SQL para insertar los datos
        $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, fecha, contraseña)
                     VALUES ('$name', '$email', '$direccion', '$phone', '$fecha', '$password')";

        // Ejecuta la consulta
        $resultado = mysqli_query($conex, $consulta);

        // Verifica si la consulta fue exitosa
        if ($resultado) {
            echo '<h3 class="success">Tu registro se ha completado</h3>';
        } else {
            echo '<h3 class="error">Ocurrió un error al registrar los datos</h3>';
        }
    } else {
        echo '<h3 class="error">Llena todos los campos</h3>';
    }
}
?>
