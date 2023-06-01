<?php
// auth.php

session_start();

// Conexión a la base de datos
$dbHost = 'localhost';
$dbUsername = 'tacos';
$dbPassword = '123';
$dbName = 'tacos';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener las credenciales ingresadas por el usuario
if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    $username = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    // Consultar la base de datos utilizando una sentencia preparada
    $query = "SELECT * FROM usuarios WHERE usuario='".$username."' AND contraseña='".$contraseña."'";
    $stmt = $conn->prepare($query);
    //$stmt->bind_param("ss", $username, $contraseña);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Las credenciales son correctas, iniciar sesión
        $row = $result->fetch_assoc();
        $_SESSION['usuario'] = $username;
        
        if ($row['id_cargo'] == 1) {
            header('Location: Menu_admin.php'); // Redireccionar a la página index_pedido.php para el usuario con id_cargo 1
        } else {
            header('Location: index.php'); // Redireccionar a index.php para otros usuarios
        }
    } else {
        // Las credenciales son incorrectas, almacenar mensaje de error en una variable de sesión
        $_SESSION['error_message'] = "Usuario o contraseña incorrectos favor de verificar";
        header('Location: login.php'); // Redireccionar al formulario de inicio de sesión
    }

    $stmt->close();
} else {
    $_SESSION['error_message'] = "Por favor, complete todos los campos del formulario.";
    header('Location: login.php'); // Redireccionar al formulario de inicio de sesión
}

// Cerrar sesión
if (isset($_GET['logout'])) {
    unset($_SESSION['usuario']);
    session_destroy();
    header('Location: login.php'); // Redireccionar a la página de inicio de sesión
    exit();
}

$conn->close();
?>
