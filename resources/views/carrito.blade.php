<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXE ATELIER - Carrito de Compras</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Helvetica Neue', sans-serif;
            background: #0a0a0a;
            color: #ffffff;
            overflow-x: hidden;
        }

        /* Navigation */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(20px);
            z-index: 1000;
            padding: 1rem 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 2px;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a:hover {
            color: #d4af37;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #d4af37, #ffd700);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            height: 60vh;
            background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(30, 30, 30, 0.9)),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(212,175,55,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            margin-top: 80px;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 700;
            letter-spacing: 3px;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-transform: uppercase;
        }

        .hero p {
            font-size: 1.3rem;
            color: #cccccc;
            line-height: 1.8;
            margin-bottom: 3rem;
            font-weight: 300;
        }

        /* Cart Section */
        .cart-section {
            padding: 6rem 2rem;
            background: #0a0a0a;
        }

        .cart-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            letter-spacing: 2px;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-transform: uppercase;
        }

        .golden-line {
            height: 2px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            margin: 2rem auto 4rem;
            width: 200px;
        }

        .cart-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 4rem;
            margin-top: 3rem;
        }

        /* Cart Items */
        .cart-items {
            background: linear-gradient(145deg, rgba(20, 20, 20, 0.9), rgba(30, 30, 30, 0.8));
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
        }

        .cart-items h3 {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: #d4af37;
            letter-spacing: 1px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1.5rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item:hover {
            transform: translateX(10px);
            background: rgba(212, 175, 55, 0.05);
            border-radius: 10px;
            padding: 1.5rem;
        }

        .item-image {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            object-fit: cover;
            border: 2px solid rgba(212, 175, 55, 0.3);
        }

        .item-details {
            flex: 1;
        }

        .item-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #ffffff;
        }

        .item-price {
            font-size: 1.1rem;
            color: #d4af37;
            font-weight: 600;
        }

        .item-quantity {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .quantity-btn {
            background: linear-gradient(135deg, #d4af37, #ffd700);
            color: #000;
            border: none;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .quantity-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4);
        }

        .quantity-number {
            font-size: 1.1rem;
            font-weight: 600;
            min-width: 30px;
            text-align: center;
        }

        .remove-btn {
            background: transparent;
            color: #ff6b6b;
            border: 2px solid #ff6b6b;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .remove-btn:hover {
            background: #ff6b6b;
            color: #fff;
            transform: scale(1.05);
        }

        /* Cart Summary */
        .cart-summary {
            background: linear-gradient(145deg, rgba(20, 20, 20, 0.9), rgba(30, 30, 30, 0.8));
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            height: fit-content;
            position: sticky;
            top: 120px;
        }

        .summary-title {
            font-size: 1.8rem;
            margin-bottom: 2rem;
            color: #d4af37;
            letter-spacing: 1px;
            text-align: center;
        }

        .summary-line {
            display: flex;
            justify-content: space-between;
            margin-bottom: 1rem;
            padding: 0.5rem 0;
        }

        .summary-line.total {
            border-top: 2px solid rgba(212, 175, 55, 0.3);
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            font-size: 1.3rem;
            font-weight: 700;
            color: #d4af37;
        }

        .checkout-btn {
            width: 100%;
            padding: 1.2rem 2rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            color: #000;
            border: none;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 2rem;
        }

        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 30px rgba(212, 175, 55, 0.4);
        }

        .continue-shopping {
            text-align: center;
            margin-top: 1.5rem;
        }

        .continue-shopping a {
            color: #888;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .continue-shopping a:hover {
            color: #d4af37;
        }

        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 4rem 2rem;
            color: #888;
        }

        .empty-cart h3 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .shop-now-btn {
            display: inline-block;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            color: #000;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            margin-top: 2rem;
            transition: all 0.3s ease;
        }

        .shop-now-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.4);
        }

        /* Luxury Details */
        .luxury-accent {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(212, 175, 55, 0.2), transparent);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
                opacity: 0.7;
            }
            50% {
                transform: scale(1.2);
                opacity: 0.3;
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .cart-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .cart-item {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .item-quantity {
                justify-content: center;
            }

            .section-title {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">LUXE ATELIER</div>
            <ul class="nav-links">
                <li><a href="/">INICIO</a></li>
                <li><a href="/productos">PRODUCTOS</a></li>
                <li><a href="/carrito">CARRITO</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="luxury-accent"></div>
        <div class="hero-content">
            <h1>CARRITO VIP</h1>
            <p>Revisa tu selección de productos premium y procede con tu compra exclusiva.</p>
        </div>
    </section>

    <!-- Cart Section -->
    <section class="cart-section">
        <div class="cart-container">
            <h2 class="section-title">TU SELECCIÓN</h2>
            <div class="golden-line"></div>

            @if(count($carrito) > 0)
                <div class="cart-layout">
                    <!-- Cart Items -->
                    <div class="cart-items">
                        <h3>Productos Seleccionados ({{ count($carrito) }})</h3>
                        
                        @foreach($carrito as $item)
                            <div class="cart-item" data-id="{{ $item['id'] }}">
                                <img src="{{ $item['imagen'] }}" alt="{{ $item['nombre'] }}" class="item-image">
                                
                                <div class="item-details">
                                    <div class="item-name">{{ $item['nombre'] }}</div>
                                    <div class="item-price">${{ number_format($item['precio'], 2) }}</div>
                                </div>
                                
                                <div class="item-quantity">
                                    <button class="quantity-btn" onclick="changeQuantity({{ $item['id'] }}, -1)">-</button>
                                    <span class="quantity-number" id="qty-{{ $item['id'] }}">{{ $item['cantidad'] }}</span>
                                    <button class="quantity-btn" onclick="changeQuantity({{ $item['id'] }}, 1)">+</button>
                                </div>
                                
                                <button class="remove-btn" onclick="removeItem({{ $item['id'] }})">Eliminar</button>
                            </div>
                        @endforeach
                    </div>

                    <!-- Cart Summary -->
                    <div class="cart-summary">
                        <h3 class="summary-title">Resumen de Compra</h3>
                        
                        <div class="summary-line">
                            <span>Subtotal:</span>
                            <span id="subtotal">${{ number_format(collect($carrito)->sum(function($item) { return $item['precio'] * $item['cantidad']; }), 2) }}</span>
                        </div>
                        
                        <div class="summary-line">
                            <span>Envío Premium:</span>
                            <span>$50.00</span>
                        </div>
                        
                        <div class="summary-line">
                            <span>Impuestos:</span>
                            <span id="taxes">${{ number_format(collect($carrito)->sum(function($item) { return $item['precio'] * $item['cantidad']; }) * 0.12, 2) }}</span>
                        </div>
                        
                        <div class="summary-line total">
                            <span>Total:</span>
                            <span id="total">${{ number_format(collect($carrito)->sum(function($item) { return $item['precio'] * $item['cantidad']; }) * 1.12 + 50, 2) }}</span>
                        </div>
                        
                        <button class="checkout-btn" onclick="proceedCheckout()">
                            Proceder al Pago
                        </button>
                        
                        <div class="continue-shopping">
                            <a href="/productos">← Continuar Comprando</a>
                        </div>
                    </div>
                </div>
            @else
                <div class="empty-cart">
                    <h3>🛒 Tu carrito está vacío</h3>
                    <p>¡Explora nuestra colección exclusiva y encuentra productos increíbles!</p>
                    <a href="/productos" class="shop-now-btn">Explorar Productos</a>
                </div>
            @endif
        </div>
    </section>

    <script>
        function changeQuantity(itemId, change) {
            const qtyElement = document.getElementById(`qty-${itemId}`);
            let currentQty = parseInt(qtyElement.textContent);
            let newQty = Math.max(1, currentQty + change);
            
            qtyElement.textContent = newQty;
            updateTotals();
            
            // Animación
            qtyElement.style.transform = 'scale(1.2)';
            setTimeout(() => {
                qtyElement.style.transform = 'scale(1)';
            }, 200);
        }

        function removeItem(itemId) {
            if (confirm('¿Estás seguro de que quieres eliminar este producto?')) {
                const item = document.querySelector(`[data-id="${itemId}"]`);
                item.style.transform = 'translateX(-100%)';
                item.style.opacity = '0';
                
                setTimeout(() => {
                    item.remove();
                    updateTotals();
                    checkEmptyCart();
                }, 300);
            }
        }

        function updateTotals() {
            let subtotal = 0;
            document.querySelectorAll('.cart-item').forEach(item => {
                const price = parseFloat(item.querySelector('.item-price').textContent.replace('$', '').replace(',', ''));
                const qty = parseInt(item.querySelector('.quantity-number').textContent);
                subtotal += price * qty;
            });
            
            const taxes = subtotal * 0.12;
            const shipping = 50;
            const total = subtotal + taxes + shipping;
            
            document.getElementById('subtotal').textContent = `$${subtotal.toLocaleString('en-US', {minimumFractionDigits: 2})}`;
            document.getElementById('taxes').textContent = `$${taxes.toLocaleString('en-US', {minimumFractionDigits: 2})}`;
            document.getElementById('total').textContent = `$${total.toLocaleString('en-US', {minimumFractionDigits: 2})}`;
        }

        function checkEmptyCart() {
            if (document.querySelectorAll('.cart-item').length === 0) {
                document.querySelector('.cart-layout').innerHTML = `
                    <div class="empty-cart" style="grid-column: 1/-1;">
                        <h3>🛒 Tu carrito está vacío</h3>
                        <p>¡Explora nuestra colección exclusiva y encuentra productos increíbles!</p>
                        <a href="/productos" class="shop-now-btn">Explorar Productos</a>
                    </div>
                `;
            }
        }

        function proceedCheckout() {
            alert('¡Próximamente! Sistema de pago en desarrollo.\n\nPronto podrás completar tu compra con total seguridad.');
        }

        // Animaciones de entrada
        document.addEventListener('DOMContentLoaded', function() {
            const cartItems = document.querySelectorAll('.cart-item');
            cartItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(30px)';
                
                setTimeout(() => {
                    item.style.transition = 'all 0.6s ease';
                    item.style.opacity = '1';
                    item.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>
