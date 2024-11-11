<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <style>
        /* Estilo para centrar el contenido en toda la página */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            padding: 20px;
        }

        /* Estilo para la sección de productos */
        #product-list {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .product {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .product button {
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .product button:hover {
            background-color: #0056b3;
        }

        /* Estilo para la sección del Carrito */
        .cart-section {
            max-width: 800px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .cart-section h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        /* Estilo de la tabla del carrito */
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .cart-table th, .cart-table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .cart-table th {
            background-color: #f4f4f4;
            color: #333;
        }

        .cart-table .total-row {
            font-weight: bold;
            background-color: #f9f9f9;
        }

        /* Estilo de los botones */
        .btn-cart, .btn-checkout {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
            margin: 10px 0;
        }

        .btn-cart:hover, .btn-checkout:hover {
            background-color: #555;
        }

        /* Estilo para el enlace de continuar comprando */
        .btn-cart {
            background-color: #007bff;
        }

        .btn-cart:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Lista de productos disponibles -->
    <section id="product-list">
        <h2>Productos Disponibles</h2>
        <div class="product">
            <p>Producto 1 - $10.00</p>
            <button onclick="addToCart('Producto 1', 10.00)">Agregar al Carrito</button>
        </div>
        <div class="product">
            <p>Producto 2 - $15.00</p>
            <button onclick="addToCart('Producto 2', 15.00)">Agregar al Carrito</button>
        </div>
        <div class="product">
            <p>Producto 3 - $20.00</p>
            <button onclick="addToCart('Producto 3', 20.00)">Agregar al Carrito</button>
        </div>
    </section>

    <!-- Sección del carrito -->
    <section id="cart" class="cart-section">
        <h2>Carrito de Compras</h2>
        <table class="cart-table" id="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="cart-body">
                <!-- Las filas del carrito se generarán aquí dinámicamente -->
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <td colspan="4">Total</td>
                    <td id="cart-total">$0.00</td>
                </tr>
            </tfoot>
        </table>
        <a href="clientes.php" class="btn-cart">Continuar Comprando</a>
        <a href="#checkout" class="btn-checkout">Proceder al Pago</a>
    </section>

    <script>
        // Lista de productos en el carrito
        let cartItems = [];

        // Función para agregar un producto al carrito
        function addToCart(name, price) {
            const existingItem = cartItems.find(item => item.name === name);
            if (existingItem) {
                existingItem.quantity++;
            } else {
                cartItems.push({ name, price, quantity: 1 });
            }
            updateCart();
        }

        // Función para reducir la cantidad de un producto o eliminarlo del carrito
        function removeOneFromCart(name) {
            const item = cartItems.find(item => item.name === name);
            if (item) {
                item.quantity--;
                if (item.quantity <= 0) {
                    // Eliminar el producto si la cantidad es 0
                    cartItems = cartItems.filter(i => i.name !== name);
                }
            }
            updateCart();
        }

        // Función para actualizar la tabla del carrito
        function updateCart() {
            const cartBody = document.getElementById('cart-body');
            const cartTotal = document.getElementById('cart-total');

            // Limpia la tabla
            cartBody.innerHTML = '';

            // Recalcula el total
            let total = 0;

            cartItems.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.name}</td>
                    <td>${item.quantity}</td>
                    <td>$${item.price.toFixed(2)}</td>
                    <td>$${(item.quantity * item.price).toFixed(2)}</td>
                    <td>
                        <button onclick="removeOneFromCart('${item.name}')">Quitar Uno</button>
                    </td>
                `;
                cartBody.appendChild(row);

                total += item.quantity * item.price;
            });

            // Actualiza el total en el pie de página
            cartTotal.textContent = `$${total.toFixed(2)}`;
        }

        // Llama a la función para inicializar el carrito
        updateCart();
    </script>


<footer>
    <p>&copy; 2024 E-commerce de diego y cristopher.</p><br>
    <p>&copy; 2024 VentasOcean.</p>
</footer>
</body>
</html>