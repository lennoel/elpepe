<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">

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
            <form class="sign-up">
                <h2>Registrarse</h2>
                <div class="container-input">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" placeholder="Nombre">
                </div>
                <div class="container-input">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" placeholder="Email">
                </div>
                <div class="container-input">
                    <ion-icon name="home-outline"></ion-icon>
                    <input type="text" placeholder="Dirreccion">
                </div>
                <div class="inputs-wrapper">
                    <div class="container-input">
                      <ion-icon name="call-outline"></ion-icon>
                      <input type="number" placeholder="Teléfono">
                    </div>
                    <div class="container-input">
                        <input name="data" id="data" type="date" class="infos">
                    </div>
                  </div>
                
                <div class="container-input">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" placeholder="Password">
                </div>
                <button class="button" >REGISTRARSE</button>
                
            </form>
        </div>

        <div class="container-welcome">
            <div class="welcome-sign-up welcome">
                <img src="img/a1.png" width="200" height="200"/>
                <h3>hl ctm</h3>
                <p>Ingrese sus datos personales para para el banco bnb</p>
                <button class="button" id="btn-sign-up">Registrarse</button>
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