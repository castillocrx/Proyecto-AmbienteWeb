<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <!-- preload -->
    <link rel="preload" href="css/style.css">
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/cerrarSesion.js"></script>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="pos-logo">
            <a href="mainProductos.php">
                <img class="logo" src="img/logo.jpg" alt="Logo de tienda">
            </a>
            <h2 class="nombre-tienda">Burger Shop</h2>
        </div>
        <nav class="header-pages">
            <a href="nosotros.php" rel="noopener noreferrer">Nosotros</a>
            <a href="contacto.php" rel="noopener noreferrer">Contáctenos</a>
            <a href="descuentos.php" rel="noopener noreferrer">Descuentos</a>
            <a href="cuenta.php" rel="noopener noreferrer">Cuenta</a>
            <a href="carrito.php">
                <img class="logo" src="img/carrito.png" alt="Logo de tienda">
            </a>
        </nav>

    </header>

    <?php
    session_start();

    //Para detener la sesion
    // session_destroy(); 
    ?>

    <div class="bienv-pos">
        <h1 class="bienvenido">Perfil</h1>
    </div>

    <main class="contenedor">
        <div class="productos">

            <?php
            if (isset($_SESSION['correo'])) {
                require_once "DL/cliente.php";
                $cliente = getClienteByCorreo($_SESSION['correo']);

                if ($cliente) {
                    echo "<div class='producto'>";
                    echo "<h1 class='pos-h1'>Hola, " . $cliente['nombre'] . "!</h1>";
                    echo "<p>Correo: " . $cliente['correo'] . "</p>";
                    echo "<p>Dirección: " . $cliente['direccion'] . "</p>";
                    echo "<p>Teléfono: " . $cliente['telefono'] . "</p>";
                    echo "<button class='boton-admin' id='cerrarSesionBtn'>Cerrar Sesión</button>";
                    echo "</div>";
                } else {
                    echo "<p>Error al obtener la información del cliente</p>";
                }
            } else {
                header("Location: login.php");
                exit();
            }


            ?>

        </div>
    </main>

    <?php
    include_once "include/template/footer.php";
