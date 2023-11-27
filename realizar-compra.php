<?php
session_start();

if (isset($_POST['comprar']) && isset($_POST['id'])) {
    $id = $_POST['id'];

    if (!isset($_SESSION['carrito'][$id])) {
        header("Location: carrito.php");
        exit();
    }

    require_once "DL/factura.php";
    require_once "DL/cliente.php";
    require_once "DL/producto.php";

    $producto = getProductoById($id);

    if (!$producto) {
        header("Location: carrito.php");
        exit();
    }

    $cliente = getClienteByCorreo($_SESSION['correo']);

    if (!$cliente) {
        header("Location: carrito.php");
        exit();
    }

    $precioTotal = $producto['precio'] + 700;

    $fecha = date('Y-m-d');

    if (crearFactura($cliente['idCliente'], $producto['id'], $fecha, $precioTotal)) {
        echo "<h1>Detalles de la Compra</h1>";
        echo "<p>Nombre del Cliente: {$cliente['nombre']}</p>";
        echo "<p>Correo del Cliente: {$cliente['correo']}</p>";
        echo "<p>Nombre del Producto: {$producto['nombre']}</p>";
        echo "<p>Descripción del Producto: {$producto['descripcion']}</p>";
        echo "<img src='{$producto['imagen']}' alt='Imagen del producto' height='100'>";
        echo "<p>Precio del Producto: {$producto['precio']}</p>";
        echo "<p>Fecha de Factura: $fecha</p>";
        echo "<p>Precio Total de la Factura: $precioTotal</p>";

        // eliminar el producto del carrito después de comprar
        unset($_SESSION['carrito'][$id]);

        echo "<a href='carrito.php'>Volver al Carrito</a>";
    } else {
        echo "Error al realizar la compra";
    }
} else {
    header("Location: carrito.php");
    exit();
}
?>
