<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/StyleRegister.css">
    <link rel="stylesheet" href="Css/Style.css">
    <link rel="stylesheet" href="Css/estilosPlantilla.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Register</title>
</head>
<?php require_once 'componentsPhp/header.php' ?>
<body>
    <div id="Container">
        <form action="validacionLogin.php"  method="POST">
            <img id="logo" src="assets/Icon.png" alt=""> <br>
            <div id="formulario">
            <button id="btnRegister"><a id="btnRegister" href="Register.php">Register</a></button><button id="btnLogin" ><a id="btnLogin" href="Login.php">Login</a></button><br><br>
            <img id="facebook" src="assets/facebook.png" width="25px" alt="" >       <img id="google" src="assets/google.png"  width="25px" alt=""><br>
            <label for="suEmail">Correo Electrónico</label><br>
            <input class="input" type="email" name="Email" id="suEmail" placeholder="Correo Electrónico"><br>
            <label for="suPassword">Contraseña</label><br>
            <input class="input" type="password" name="Password" id="suPassword" placeholder="Contraseña"><br> <br> 
            </div>
            <button id="btnSesion">Iniciar sesión</button>
            <br> <br>
        </form>
        <p id="terms">Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <hr>
        <p id="link">¿Tienes una cuenta? <a id="a" href="#">inicia Sesión</a></p>
    </div>
</body>
</html>