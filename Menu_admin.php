
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Administrador</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/style1.css?7.00">
</head>
<body>
    <header class="header">
        <img class="bg" src="images/bg.svg" alt="">
        <div class="header-content container">
            <div class="header-info">
                <div class="header-txt">
                    <h1>OPERACIONES</h1>
                  
                </div>
            </div>
        </div>
    </header>

   

    <div class="cards-container">
        <div class="card">
            <img src="images/image25.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PEDIDOS</h5>
                <p class="card-text">Accede para Agregar, Borrar o Modificar un pedido</p>
                <a href="index_pedido.php" class="blue-button">Pedidos</a>
            </div>
        </div>

        <div class="card">
            <img src="images/image26.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">REPARTIDOR</h5>
                <p class="card-text">Accede para Agregar, Borrar o Modificar un repartidor</p>
                <a href="index_repartidor.php" class="blue-button">Repartidores</a>
            </div>
        </div>

        <div class="card">
            <img src="images/image27.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PRODUCTOS</h5>
                <p class="card-text">Accede para Agregar, Borrar o Modificar un producto</p>
                <a href="index_producto.php" class="blue-button">Producto</a>
            </div>
        </div>

        <div class="card">
            <img src="images/image28.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">CLIENTES</h5>
                <p class="card-text">Accede para Agregar, Borrar o Modificar un cliente</p>
                <a href="index_cliente.php" class="blue-button">Clientes</a>
            </div>
        </div>

        <div class="card">
            <img src="images/image29.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">VENTAS</h5>
                <p class="card-text">Accede para Agregar, Borrar o Modificar una venta</p>
                <a href="index_venta.php" class="blue-button">Ventas</a>
            </div>
        </div>

        <div class="card">
            <img src="images/image30.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">USUARIOS</h5>
                <p class="card-text">Accede para Agregar, Borrar o Modificar un usuario</p>
                <a href="index_usuario.php" class="blue-button">Usuarios</a>
            </div>
        </div>
        
    </div>

    <div class="button-container">
    <form action="auth.php" method="GET" class="logout-form">
    <input type="hidden" name="logout">
    <button type="submit" class="logout-button">Cerrar sesión</button>
    
 

    </div>

   
    
   
</body>
</html>

   