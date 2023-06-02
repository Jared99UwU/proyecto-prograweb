<?php
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/style2.css?3.00" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    <link rel="icon" href="images/logo.png">

    <style>
        .error-message {
            color: orange;
        }
    </style>
</head>
<body>

<div class="box">
  <div class="form">
    <h2>Iniciar Sesion</h2>
    <a class="logo"><img src="images/logo.png" alt="Logo"></a>
    <div class="inputBox">
    <form action="auth.php" method="POST">
      <input type="email" id="usuario" name="usuario" required="required" />
      <span>Usuario</span>
      <i></i>
    </div>
    <div class="inputBox">
      <input type="password" id="contraseña" name="contraseña" required="required" />
      <span>Contraseña</span>
      <i></i>
    </div>
    <div class="links">
      <a href="#">¿Olvidaste tu contraseña?</a>
      <a href="registro.php">Registrarse</a>
    </div>
    <input type="submit" value="Ingresar" />
    </form>

    <?php
        session_start();

        if (isset($_SESSION['error_message'])) {
            echo '<div class="error-message">'.$_SESSION['error_message'].'</div>';
            unset($_SESSION['error_message']);
        }
    ?>
  </div>
</div>

</body>
</html>
