<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: index.php");
}
?>

<?php include_once "header2.php"; ?>

<body data-bs-theme="light">
  <div class="row">
    <div class="sidebar" data-bs-theme="light">
      <a href="#messages"><i class="fa-regular fa-message"></i></a>
      <a href="#contacts"><i class="fi fi-rs-users-alt"></i></a>
      <a href="#Configuracion"><i class="fi fi-rs-admin-alt"></i></a>
      <button onclick="cambiarmodo()" class="btn rounded-fill"><i id="darkmode" class="fi fi-rs-moon-stars" style="color: white;"></i></button>
    </div>
    <div class="content" data-bs-theme="light">
      <div id="messages">
        <h1>Chats</h1>
        <div class="wrapper">
          <section class="users">
            <div class="search">
              <span class="text">Selecciona un usuario para iniciar el chat</span>
              <input type="text" placeholder="Enter name to search...">
              <button><i class="fas fa-search"></i></button>
            </div>
            <div class="users-list">
              <?php
              // Asumiendo que $_SESSION['unique_id'] contiene el ID del usuario en sesión
              $currentUser = $_SESSION['unique_id'];
              // Obtener todos los usuarios excepto el usuario en sesión
              $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id != '$currentUser'");
              if(mysqli_num_rows($sql2) > 0){
                while($row = mysqli_fetch_assoc($sql2)){
                  // Mostrar los detalles de cada usuario
                  echo '
                    <div class="card mb-3 user-card" style="max-width: 540px;" data-user-id="'.$row['unique_id'].'">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="php/images/'.$row['img'].'" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title">'.$row['fname'].' '.$row['lname'].'</h5>
                            <p class="card-text">'.$row['status'].'</p>
                          </div>
                        </div>
                      </div>
                    </div>';
                }

              } else {
                echo '<p>No hay usuarios disponibles.</p>';
              }
              ?>
            </div>
          </section>
        </div>

      </div>
    

      <div id="contacts" style="display: none;">
        <h2>Contactos</h2>
        <p>Contenido de la sección de contactos...</p>
      </div>
      <div id="Configuracion" style="display: none;">
        <h2>Mi cuenta</h2>
        <div class="usuario-info">
          <img src="img/monagullo.jpg" alt="Avatar del usuario">
          <h2>Nombre de usuairio</h2>
          <p>correo@ejemplo.com</p>
          <p>Contraseña: ****</p>

        
          <?php
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
          if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
          }
          ?>
        <button class="cerrar-sesion" onclick="cerrarSesion('<?php echo $row['unique_id']; ?>')">Cerrar Sesión</button>

        </div>
      </div>
    </div>
  </div>
  
  <script src="js/users.js"></script>
  <script src="js/scriptquick.js"></script>
  <script src="js/logout.js"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
