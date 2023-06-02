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
    <title>Ubicacion</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css?2.00">
</head>

<body>
    <header class="header">
        <img class="bg" src="images/bg.svg" alt="">


        <div class="menu container">

            <a class="logo"><img src="images/logo.png" alt="Logo"></a>
            <input type="checkbox" id="menu">
            <label for="menu"><img src="images/menu.png" class="menu-icono" alt=""></label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Menu.php">Menu</a></li>
                    <li><a href="index_pedido.php">Haz tu pedido</a></li>
                    <li><a href="preguntas.php">Preguntas frecuentes</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-info">
                <div class="header-txt">
                    <h1>Visitanos!!
                    </h1>
                    <p>
                        Estamos ubicados en la carretera Queretaro-Celaya, Comunidad Tenango el nuevo
                        en la gasolinera Petrofigues Brujas 2 a un costado del Starbucks
                    </p>
                    <a href="Menu.php" class="btn-1">Seccion menu</a>

                </div>
                <div class="header-img">
                    <img src="images/image19.png" alt="">
                </div>
            </div>
        </div>
    </header>
    <section id="ubicacion">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.372639924407!2d-100.65411632630047!3d20.5319287046605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cb31217e11173%3A0x611b80effe05c242!2sPetrofigues%20Brujas%202!5e0!3m2!1ses!2smx!4v1681238042647!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <section class="nosotros">
        <img class="bg-2" src="images/bg-2.svg" alt="">
        <div class="nosotros-info container">
            <div class="nosotros-img">
                <img src="images/image17.png" alt="">
            </div>
            <div class="nosotros-txt">
                <span>¿Mas comodidad?</span>
                <h2>Llamanos</h2>
                <p>En nuestro negocio, valoramos tu opinión y estamos comprometidos en brindarte la mejor
                    atención al cliente posible. Visita nuestra seccion de contacto para realizar un pedido personalizado.
                </p>
                <a href="contacto.php" class="btn-1">Saber Mas</a>
            </div>
    </section>
    </div>
    <footer class="footer-container">
        <div class="footer-links">
            <div class="link">
                <h3>Encuentranos en</h3>
                <div class="socials">
                    <img src="images/s1.svg" alt="">
                    <img src="images/s2.svg" alt="">
                    <img src="images/s4.svg" alt="">
                    <form action="auth.php" method="GET" class="logout-form">
    <input type="hidden" name="logout">
    <button type="submit" class="logout-button">Cerrar sesión</button>
</form>

</form>

                </div>
            </div>
          
        </div>
        </div>
    </footer>



</body>

</html>