<?php
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
                <h1>Crea una cuenta</h1>
                <div class="social-icons">
                 
                </div>
                <span>O utilice su correo electrónico para registrarse</span>
                <input type="text" name="fname" placeholder="Nombre">
                <input type="email" name="email" placeholder="Correo electronico">
                <input type="password" name="password" placeholder="Contraseña">
                <button>Inscribirse</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <h1>Iniciar sesion</h1>
                <div class="social-icons">
                 
                </div>
                <span>O utiliza tu contraseña de correo electrónico:</span>
                <input type="email" placeholder="Correo electronico">
                <input type="password" placeholder="Contraseña">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <button>Iniciar sesion</button>
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

  <script src="js/pass-show-hide.js"></script>
  <script src="js/signup.js"></script>

</body>

</html>