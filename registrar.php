<?php
include("conexion.php");
if(isset($_POST["register"])){
    if(
        strlen($_POST["name"]) >= 1 &&
        strlen($_POST["email"]) >= 1 &&
        strlen($_POST["direccion"]) >= 1 &&
        strlen($_POST["phone"]) >= 1 &&
        strlen($_POST["password"]) >= 1 
    ){
        $name = trim($_POST['name']);
        $email = trim($_POST["email"]);
        $direccion = trim($_POST["direccion"]);
        $phone = trim($_POST["phone"]);
        $password = trim($_POST["password"]);
        $fecha= date("d/m/y");
        $consulta = "INSERT INTO datos (nombre, email, direccion, telefono, contraseña, fecha)
            VALUES ('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if ($resultado){
        ?>
            <h3 class="success" >Tu resgistro se a completado</h3>
        <?php
        } else{
        ?>
            <h3 class="error">Ocurrio un error</h3>
        <?php
        }

    } else{
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }

}

?> 