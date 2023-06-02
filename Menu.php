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
    <title>Menu</title>
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
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="ubicacion.php">Ubicacion</a></li>
                    <li><a href="preguntas.php">Preguntas frecuentes</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-content container">
            <div class="header-info">
                <div class="header-txt">
                    <h1>Disfruta de nuestros mejores productos</h1>
                    <p>
                        Nuestros productos de menú son el resultado de una cuidadosa selección de ingredientes frescos y
                        de alta calidad, combinados con sabores auténticos y recetas tradicionales para ofrecer una
                        un sabor único e inolvidable.

                    </p>
                    
                </div>
                <div class="header-img">
                    <img src="images/image16.png" alt="">
                </div>
            </div>
        </div>
    </header>

    <main class="products container">
        <h2>Productos</h2>
        <div class="product-info">
            <div class="product">
                <img src="images/image4.JPG" alt="">
                <h3>Orden de tacos de maiz</h3>
                <p> La orden contiene 4 deliciosos tacos con tortilla de maiz
                    que pueden ser de frijol, papa, chicharron o frijoles.
                    Los puede preparar con ensalada y salsa al gusto
                </p>
                <span>$30.00</span>
            </div>
            <div class="product">
                <img src="images/image5.JPG" alt="">
                <h3>Orden de tacos de harina</h3>
                <p>La orden contiene 3 deliciosos tacos con tortilla de harina
                    que pueden ser de frijol, papa, chicharron o frijoles.
                    Los puede preparar con ensalada y salsa al gusto
                </p>
                <span>$30.00</span>
            </div>
            <div class="product">
                <img src="images/image6.png" alt="">
                <h3>Agua fresca grande</h3>
                <p>Vaso de 1 litro de agua fresca de frutas
                </p>
                <span>$30.00</span>
            </div>
            <div class="product">
                <img src="images/image7.JPG" alt="">
                <h3>Agua fresca chica</h3>
                <p> Vaso de medio litro de agua fresca de frutas
                </p>
                <span>$15.00</span>
            </div>
            <div class="product">
                <img src="images/image8.JPG" alt="">
                <h3>Coca Cola 600ml</h3>
                <p>Botella de Coca Cola de 600ml fria o al tiempo
                </p>
                <span>$20.00</span>
            </div>
            <div class="product">
                <img src="images/image9.png" alt="">
                <h3>Resfresco 600ml</h3>
                <p>Botella de refresco de 600ml frio o al tiempo
                </p>
                <span>$20.00</span>
            </div>
            <div class="product">
                <img src="images/image10.JPG" alt="">
                <h3>Cafe de olla</h3>
                <p>Taza o vaso de cafe 250ml
                </p>
                <span>$20.00</span>
            </div>
            <div class="product">
                <img src="images/image11.jpg" alt="">
                <h3>Pieza de pan</h3>
                <p>Pieza de pan del dia
                </p>
                <span>$10.00</span>
            </div>
            <div class="product">
                <img src="images/image12.jpg" alt="">
                <h3>Huevito cocido</h3>
                <p>1 huevo cocido para acompañar la orden de tacos
                </p>
                <span>$5.00</span>
            </div>
        </div>
        
    </main>

    <hr>
</div>
<section class="nosotros">
        <img class="bg-2" src="images/bg-2.svg" alt="">
        <div class="nosotros-info container">
            <div class="nosotros-img">
                <img src="images/image18.png" alt="">
            </div>
            <div class="nosotros-txt">
               
                <h2>Haz tu pedido</h2>
                <p>En nuestra página web podrás realizar pedidos en línea y disfrutar de nuestros tacos de guisado
                    recién preparados en la comodidad de tu hogar o lugar de trabajo. Además, encontrarás información
                    detallada sobre nuestros productos y servicios, así como las últimas promociones y novedades.
                </p>
                <a href="Crud_PedidoUsuario.php" class="btn-1">Realizar pedido aqui</a>
            </div>
    </section>
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