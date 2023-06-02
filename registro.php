<?php session_start();
if(!isset($_SESSION['usuario']))
    header("location: login.php");
include("connection.php");
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="icon" href="images/logo.png">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #23242a;
        }

        .box {
            position: relative;
            width: 500px;
            height: 580px;
            background: #1c1c1c;
            border-radius: 8px;
            overflow: hidden;
        }

        .box::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent, #FE9907, #FE9907);
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
        }

        .box::after {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            background: linear-gradient(0deg, transparent, #FE9907, #FE9907);
            transform-origin: bottom right;
            animation: animate 6s linear infinite;
            animation-delay: -3s;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .form {
            position: absolute;
            inset: 2px;
            border-radius: 8px;
            background-color:#808080;
            z-index: 10;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
        }

        .form h2 {
            color: #FE9907;
            font-weight: 500;
            align-items: center;
            letter-spacing: 0.1em;
        }

        .inputBox {
            position: relative;
            width: 300px;
            margin-top: 35px;
        }

        .inputBox input {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            font-size: 1em;
            letter-spacing: 0.05em;
            z-index: 10;
        }

        .inputBox span {
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            font-size: 1em;
            color:  #fff;
            pointer-events: none;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .inputBox input:valid ~ span,
        .inputBox input:focus ~ span {
            color:  #fff;
            transform: translateX(0px) translateY(-34px);
            font-size: 0.75em;
        }

        .inputBox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background:  #FE9907;
            border-radius: 4px;
            transition: 0.5s;
            pointer-events: none;
            z-index: 9;
        }

        .inputBox input:valid ~ i,
        .inputBox input:focus ~ i {
            height: 44px;
        }

        .links {
            display: flex;
            justify-content: space-between;
        }

        .links a {
            margin: 10px 0;
            font-size: 0.75em;
            color: #fff;
            text-decoration: none;
        }

        .links a:hover,
        .links a:nth-child(2) {
            color: #FE9907;
        }

        input[type="submit"] {
    border: 1px solid #FE9907;
    outline: none;
    background: transparent;
    color: #FE9907;
    padding: 15px 30px;
    width: 150px; /* Aumentar el ancho del botón */
    margin-top: 20px;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    transition: all .3s ease;
        }

        input[type="submit"]:hover {
            background:  #FE9907;
            color:  #fff;
        }

        input[type="submit"]:active {
            opacity: 0.8;
        }
        .logo img {
  display: block;
  width: 100px;
  height: auto;
  margin: 10px 0 0 10px; 
}

    </style>
    
</head>
<body>
    <div class="box">
        <div class="form">
            <h2>Registro de Usuario</h2>
            <a class="logo"><img src="images/logo.png" alt="Logo"></a>
            <?php
            // Comprobar si se ha enviado el formulario
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener los datos enviados desde el formulario
                $usuario = $_POST["usuario"];
                $contraseña = $_POST["contraseña"];
                $cargo = $_POST["cargo"];
    
                // Validar los campos requeridos
                if (empty($usuario) || empty($contraseña) || empty($cargo)) {
                    echo "<p>Por favor, completa todos los campos del formulario.</p>";
                } else {
                    // Validar el formato del correo electrónico (opcional)
                    if (!filter_var($usuario, FILTER_VALIDATE_EMAIL)) {
                        echo "<p>El campo 'Usuario' debe ser una dirección de correo electrónico válida.</p>";
                    } else {
                        // Realizar la conexión a la base de datos 
                        $conexion = mysqli_connect("localhost", "tacos", "123", "tacos");
    
                        if (!$conexion) {
                            die("Error al conectar a la base de datos: " . mysqli_connect_error());
                        }
    
                        // Escapar caracteres especiales para evitar inyección SQL
                        $usuario = mysqli_real_escape_string($conexion, $usuario);
                        $contraseña = mysqli_real_escape_string($conexion, $contraseña);
    
                        // Verificar si el usuario ya existe en la base de datos
                        $query = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
                        $resultado = mysqli_query($conexion, $query);
    
                        if (mysqli_num_rows($resultado) > 0) {
                            echo "<p>El usuario ya existe. Por favor, elige otro nombre de usuario.</p>";
                        } else {
                            // Insertar el nuevo usuario en la base de datos
                            $query = "INSERT INTO usuarios (usuario, contraseña, id_cargo) VALUES ('$usuario', '$contraseña', '$cargo')";
    
                            if (mysqli_query($conexion, $query)) {
                                echo "<p>¡Registro exitoso!</p>";
                            } else {
                                echo "<p>Error al registrar el usuario: " . mysqli_error($conexion) . "</p>";
                            }
                        }
    
                        // Cerrar la conexión a la base de datos
                        mysqli_close($conexion);
                    }
                }
            }
            ?>
    
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <div class="inputBox">
                    <label for="usuario">Usuario:</label>
                    <input type="email" id="usuario" name="usuario" required>
                </div>
                <div class="inputBox">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" id="contraseña" name="contraseña" required>

                </div>
                <div class="inputBox">
                    <label for="cargo">Cargo:</label>
                    <select id="cargo" name="cargo">
                        <option value="1">Administrador</option>
                        <option value="2">Empleado</option>
                      
                    </select>
                </div>
                <div>
                    <input type="submit" value="Registrarse">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
