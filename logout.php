<?php
// logout.php

session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redireccionar a la página de inicio de sesión
header('Location: login.php');
?>
