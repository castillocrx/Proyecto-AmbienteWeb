<?php
include_once "include/template/header.php";
?>

<div class="bienv-pos">
    <h1 class="bienvenido">Nuestras hamburguesas.</h1>
</div>

<main class="contenedor">
    <div class="productos">
        <?php
        require_once "DL/producto.php";
        $elSql = "select id, nombre, descripcion, imagen, precio from productos";
        $myArray = getArray($elSql);
        if (!empty($myArray)) {
            foreach ($myArray as $value) {
                echo "<div class='producto'>";
                echo "<h2>{$value['nombre']}</h2>";
                echo "<p>{$value['descripcion']}</p>";
                echo "<img src='{$value['imagen']}' alt='Imagen del producto' height='100'>";
                echo "<p>Precio: {$value['precio']}</p>";
                echo "<a href=mostrar-producto.php?id={$value['id']} class='boton-admin' style='background-color: #FF4500'>Ver Producto</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No hay productos disponibles.</p>";
        }
        ?>
    </div>
</main>
<a href="añadir-producto.php" style='background-color: #FF4500' class="boton-admin">Añadir Productos</a>
<?php
require_once "include/template/footer.php";
?>