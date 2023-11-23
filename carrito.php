<?php
include_once "include/template/header.php";
?>

<main class="contenedor">
    <h1 class="pos-h1">Carrito de Compras</h1>

    <div class="productos">
        <?php
        require_once "DL/producto.php";
        require_once "include/functions/recoge.php";
        session_start();

        if (isset($_POST['eliminar']) && isset($_POST['id'])) {
            $id = $_POST['id'];

            unset($_SESSION['carrito'][$id]);

            header("Location: carrito.php");
            exit();
        }

        $totalPrecio = 0;

        if (!empty($_SESSION['carrito'])) {
            foreach ($_SESSION['carrito'] as $id => $producto) {
                echo "<div class='producto'>";
                echo "<h2>Información del Carrito</h2>";
                echo "<table>";
                echo "<tr><th>Nombre</th><td>{$producto['nombre']}</td></tr>";
                echo "<tr><th>Descripcion</th><td>{$producto['descripcion']}</td></tr>";
                echo "<img src='{$producto['imagen']}' alt='Imagen del producto' height='100'>";
                echo "<tr><th>Precio</th><td>{$producto['precio']}</td></tr>";
                echo "</table>";
                // btn para quitar el producto del carrito
                echo "<form method='post' action='carrito.php'>";
                echo "<input type='hidden' name='id' value='$id'>";
                echo "<input class='boton-admin' type='submit' name='eliminar' value='Eliminar'>";
                echo "</form>";
                $totalPrecio += $producto['precio'];
                echo "</div>";
            }

        } else {
            echo "<p>No hay productos en el carrito.</p>";
        }

        echo "<h1 class='pos-h1'>Total: $totalPrecio</h1>";
        ?>
    </div>
</main>

<?php
include "include/template/footer.php";
?>