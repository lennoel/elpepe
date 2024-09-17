<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style2.css">

</head>
<body>
        
    <div class="container">
        <div class="container-form">
            <form class="sign-in">
                <h2>Iniciar Sesión</h2>
                <h5>Correo y Contraseña</h5><br>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Email">                   
                </div>
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password">
                </div>
                <a href="#">¿olvida sign el pepe?</a>
                <button class="button">INICIAR SESIÓN</button>
                <div class="social-networks">
                    <ion-icon name="logo-google"></ion-icon>
                    <ion-icon name="logo-instagram"></ion-icon>
                    <ion-icon name="logo-tiktok"></ion-icon>
                </div>
            </form>
        </div>

        <div class="container-form">
    <form class="sign-up"  method="post">
        <h2>Registrarse</h2>
        <?php

            include("registrar.php");
            ?>
        <div class="container-input">
            <ion-icon name="person-outline"></ion-icon>
            <input type="text" name="name" placeholder="Nombre" required>
        </div>
        
        <div class="container-input">
            <ion-icon name="mail-outline"></ion-icon>
            <input type="email" name="email" placeholder="Email" required>
        </div>
        
        <div class="container-input">
            <ion-icon name="home-outline"></ion-icon>
            <input type="text" name="direccion" placeholder="Dirección" required>
        </div>
        
        <div class="inputs-wrapper">
            <div class="container-input">
                <ion-icon name="call-outline"></ion-icon>
                <input type="number" name="phone" placeholder="Teléfono" required>
            </div>
            <div class="container-input">
                <input name="fecha" id="fecha" type="date" required>
            </div>

        </div>
        
        <div class="container-input">
            <ion-icon name="lock-closed-outline"></ion-icon>
            <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="select">
        <select name="format" id="format" onchange="mostrarFormulario()">
            <option selected disabled>Selecciona tu usuario</option>
            <option value="cliente">Cliente</option>
            <option value="delivery">Delivery</option>
            <option value="artesano">Artesano</option>
        </select>
    </div>  
        <button class="button" type="submit" name="register">REGISTRARSE</button>
    </form>
</div>


        <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <img src="img/a1.png" width="200" height="200"/>
                <h3>hl ctm</h3>
                <p>Ingrese sus datos personales para para el banco bnb</p>
              
                <button class="button" id="btn-sign-up">Registrarsee</button>
            </div>
            <div class="welcome-sign-in welcome">
                <img src="img/a2.png" width="200" height="200"/>
                <h3>registrate ctm</h3>
                <p>Regístrese con sus datos personales para el banco bnb</p>
                <button class="button" id="btn-sign-in">Iniciar Sesión</button>
            </div>
        </div>

    </div>


    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>