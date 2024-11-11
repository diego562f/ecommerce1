session_start();

if (empty($_SESSION['carrito'])) {
    echo "El carrito está vacío.";
} else {
    echo "<h2>Carrito de Compras</h2>";
    foreach ($_SESSION['carrito'] as $producto) {
        echo "<p>{$producto['nombre']} - Precio: \${$producto['precio']}</p>";
    }
    echo "<p><a href='clientes.php'>Volver a la tienda</a></p>";
}
