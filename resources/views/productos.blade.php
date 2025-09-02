<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXE ATELIER - Catálogo de Productos</title>
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

        /* Products Section */
        .products-section {
            padding: 6rem 2rem;
            background: #0a0a0a;
        }

        .products-container {
            max-width: 1400px;
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

        .section-subtitle {
            text-align: center;
            color: #888;
            font-size: 1.2rem;
            margin-bottom: 4rem;
        }

        .golden-line {
            height: 2px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            margin: 2rem auto 4rem;
            width: 200px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .stat-card {
            background: rgba(20, 20, 20, 0.8);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            border: 1px solid rgba(212, 175, 55, 0.2);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            border-color: rgba(212, 175, 55, 0.5);
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.2);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #d4af37;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #aaa;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Products Grid */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 3rem;
        }

        .product-card {
            background: linear-gradient(145deg, rgba(20, 20, 20, 0.9), rgba(30, 30, 30, 0.8));
            border-radius: 20px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.5s ease;
            position: relative;
            overflow: hidden;
        }

        .product-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(212, 175, 55, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .product-card:hover::before {
            left: 100%;
        }

        .product-card:hover {
            transform: translateY(-10px);
            border-color: rgba(212, 175, 55, 0.5);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2);
        }

        .product-id {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            color: #000;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .product-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 1.5rem;
            transition: all 0.3s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #ffffff;
            letter-spacing: 1px;
        }

        .product-description {
            color: #aaa;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-size: 0.95rem;
        }

        .product-price {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 2rem;
        }

        .product-btn {
            width: 100%;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            color: #000;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .product-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.4);
        }

        /* Back Button */
        .back-section {
            text-align: center;
            padding: 4rem 2rem;
            background: #050505;
        }

        .back-btn {
            display: inline-block;
            padding: 1rem 3rem;
            background: transparent;
            color: #d4af37;
            border: 2px solid #d4af37;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background: #d4af37;
            color: #000;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.3);
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .stats-grid {
                grid-template-columns: 1fr;
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
            <h1>CATÁLOGO PREMIUM</h1>
            <p>Descubre nuestra colección exclusiva de productos tecnológicos de alta gama, donde la innovación se encuentra con la elegancia.</p>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section scroll-reveal">
        <div class="products-container">
            <h2 class="section-title">PRODUCTOS EXCLUSIVOS</h2>
            <p class="section-subtitle">Tecnología de vanguardia con diseño premium</p>
            <div class="golden-line"></div>

            <!-- Statistics -->
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">{{ count($productos) }}</div>
                    <div class="stat-label">Productos Disponibles</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">${{ number_format(collect($productos)->avg('precio'), 0) }}</div>
                    <div class="stat-label">Precio Promedio</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">${{ number_format(collect($productos)->max('precio'), 0) }}</div>
                    <div class="stat-label">Producto Premium</div>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="products-grid">
                @forelse($productos as $producto)
                    <div class="product-card scroll-reveal">
                        <div class="product-id">ID: {{ $producto['id'] }}</div>
                        
                        <img src="{{ $producto['imagen'] }}" 
                             alt="{{ $producto['nombre'] }}" 
                             class="product-image">
                        
                        <h3 class="product-name">{{ $producto['nombre'] }}</h3>
                        
                        <p class="product-description">{{ $producto['descripcion'] }}</p>
                        
                        <div class="product-price">${{ number_format($producto['precio'], 2) }}</div>
                        
                        <button class="product-btn" onclick="addToCart({{ $producto['id'] }})">
                            Agregar al Carrito
                        </button>
                    </div>
                @empty
                    <div style="grid-column: 1/-1; text-align: center; color: #888; font-size: 1.5rem; padding: 4rem;">
                        <p>No hay productos disponibles en este momento</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Back Section -->
    <section class="back-section">
        <a href="/" class="back-btn">← Volver al Inicio</a>
    </section>

    <script>
        function addToCart(productId) {
            // Animación del botón
            const btn = event.target;
            const originalText = btn.textContent;
            
            btn.textContent = '¡Agregado!';
            btn.style.background = '#4CAF50';
            btn.style.transform = 'scale(0.95)';
            
            setTimeout(() => {
                btn.textContent = originalText;
                btn.style.background = 'linear-gradient(135deg, #d4af37, #ffd700)';
                btn.style.transform = 'scale(1)';
            }, 1500);
            
            // Mostrar notificación
            showNotification(`Producto agregado al carrito`);
        }

        function showNotification(message) {
            const notification = document.createElement('div');
            notification.innerHTML = `
                <div style="
                    position: fixed;
                    top: 100px;
                    right: 20px;
                    background: linear-gradient(135deg, #d4af37, #ffd700);
                    color: #000;
                    padding: 1rem 2rem;
                    border-radius: 50px;
                    font-weight: 600;
                    z-index: 10000;
                    animation: slideIn 0.3s ease;
                ">
                    ${message}
                </div>
                <style>
                    @keyframes slideIn {
                        from { transform: translateX(100%); opacity: 0; }
                        to { transform: translateX(0); opacity: 1; }
                    }
                </style>
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideIn 0.3s ease reverse';
                setTimeout(() => notification.remove(), 300);
            }, 2000);
        }

        // Scroll reveal animation
        function revealOnScroll() {
            const reveals = document.querySelectorAll('.scroll-reveal');
            
            reveals.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', revealOnScroll);
        
        // Initial reveal
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(revealOnScroll, 100);
        });
    </script>
</body>
</html>
