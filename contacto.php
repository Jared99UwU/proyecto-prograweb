<?php session_start();
if(!isset($_SESSION['usuario']))
    header("location: login.php");
include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style.css?2.00">
</head>

<body>

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
                        <li><a href="Menu.php">Seccion Menu</a></li>
                        <li><a href="ubicacion.php">Ubicacion</a></li>
                        <li><a href="preguntas.php">Preguntas frecuentes</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-content container">
                <div class="header-info">
                    <div class="header-txt">
                        <h1>Contactate con nosotros</h1>
                        <p>
                            En nuestro negocio, valoramos tu opinión y estamos comprometidos en brindarte la mejor
                            atención al cliente posible.

                            Puedes contactarnos por cualquiera de los siguientes medios:
                        </p>
                        
                    </div>
                    <div class="header-img">
                        <img src="images/image13.png" alt="">
                    </div>
                </div>
            </div>
        </header>
        <section class="info container">
            <div class="info-1">
                <img src="images/time.svg" alt="">
                <h3>Horario</h3>
                <p>Lunes a Domingo 6:00 am a 10:30pm</p>
            </div>    
            <div class="info-1">
                <img src="images/phone.svg" alt="">
                <h3>Telefono 1</h3>
                <p>4612002557</p>
            </div>    
            <div class="info-1">
                <img src="images/phone.svg" alt="">
                <h3>Telefono 2</h3>
                <p>4613916792</p>
            </div>    
        </section>
        <section class="nosotros">
        <img class="bg-2" src="images/bg-2.svg" alt="">
        <div class="nosotros-info container">
            <div class="nosotros-img">
                <img src="images/image24.png" alt="">
            </div>
            <div class="nosotros-txt">

            <h2>Haz tu pedido con nosotros</h2>
                <p>En nuestra página web podrás realizar pedidos en línea y disfrutar de nuestros tacos de guisado
                    recién preparados en la comodidad de tu hogar o lugar de trabajo. Además, encontrarás información
                    detallada sobre nuestros productos y servicios, así como las últimas promociones y novedades.
                </p>
                <a href="Crud_PedidoUsuario.php" class="btn-1">Haz tu pedido aqui</a>

            </div>


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