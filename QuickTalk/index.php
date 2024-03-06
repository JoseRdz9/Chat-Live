<?php
<<<<<<< HEAD:QuickTalk/index.php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: users.php");
}
?>

<?php include_once "header.php"; ?>

<body>

  <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="/send-email"  action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
=======
include 'php/conexion.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="#" name="quicktalk" method="POST">
>>>>>>> f738f63809500c5c077bfb4515ce39b8980a8cf6:QuickTalk/src/public/index.html
                <h1>Crea una cuenta</h1>
                <div class="social-icons">
                 
                </div>
                <span>O utilice su correo electrónico para registrarse</span>
<<<<<<< HEAD:QuickTalk/index.php
                <input type="text" name="fname" placeholder="Nombre">
=======
                <input type="text" name="name" placeholder="Nombre">
>>>>>>> f738f63809500c5c077bfb4515ce39b8980a8cf6:QuickTalk/src/public/index.html
                <input type="email" name="email" placeholder="Correo electronico">
                <input type="password" name="password" placeholder="Contraseña">
                <button type="submit" name="registro">Inscribirse</button>
                
            </form>
        </div>
        <div class="form-container sign-in">
<<<<<<< HEAD:QuickTalk/index.php
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
=======
            <form action="#" name="quicktalk"method="POST">
>>>>>>> f738f63809500c5c077bfb4515ce39b8980a8cf6:QuickTalk/src/public/index.html
                <h1>Iniciar sesion</h1>
                <div class="social-icons">
                 
                </div>
                <span>O utiliza tu contraseña de correo electrónico:</span>
                <input type="email" name="email" placeholder="Correo electronico">
                <input type="password" name="password" placeholder="Contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button name="login">Iniciar sesion</button>
            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido de nuevo!</h1>
                    <p>Ingrese sus datos personales para utilizar las funciones del sitio:</p>
                    <button class="hidden" id="login">Iniciar sesion</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hola!</h1>
                    <p>Regístrese con sus datos personales para utilizar todas las funciones del sitio:</p>
                    <button class="hidden" id="register">Registrate</button>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD:QuickTalk/index.php

  <script src="js/pass-show-hide.js"></script>
  <script src="js/signup.js"></script>
=======
>>>>>>> f738f63809500c5c077bfb4515ce39b8980a8cf6:QuickTalk/src/public/index.html

    <script src="js/script.js"></script>
</body>
</html>

<?php
include 'php/registro.php'
?>

