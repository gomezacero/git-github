<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUXE ATELIER - Moda de Alta Gama</title>
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
            height: 100vh;
            background: linear-gradient(135deg, rgba(10, 10, 10, 0.8), rgba(30, 30, 30, 0.9)),
                url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><pattern id="grid" width="100" height="100" patternUnits="userSpaceOnUse"><path d="M 100 0 L 0 0 0 100" fill="none" stroke="rgba(212,175,55,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .hero-content {
            max-width: 800px;
            padding: 0 2rem;
            animation: fadeInUp 1s ease-out;
        }

        .hero h1 {
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 100;
            letter-spacing: 4px;
            margin-bottom: 1.5rem;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero p {
            font-size: 1.3rem;
            color: #cccccc;
            margin-bottom: 3rem;
            line-height: 1.6;
            letter-spacing: 1px;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 3rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            color: #000;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 2px;
            border-radius: 50px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(212, 175, 55, 0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.6s ease;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.5);
        }

        /* Features Section */
        .features {
            padding: 8rem 2rem;
            background: #111111;
            position: relative;
        }

        .features::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
        }

        .features-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 100;
            letter-spacing: 3px;
            margin-bottom: 4rem;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 3rem 2rem;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: rgba(212, 175, 55, 0.3);
            box-shadow: 0 20px 40px rgba(212, 175, 55, 0.2);
        }

        .feature-card:hover::before {
            opacity: 1;
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 2rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            transition: all 0.3s ease;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotate(5deg);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #ffffff;
            letter-spacing: 1px;
        }

        .feature-card p {
            color: #cccccc;
            line-height: 1.6;
            letter-spacing: 0.5px;
        }

        /* Products Showcase */
        .products {
            padding: 8rem 2rem;
            background: linear-gradient(135deg, #0a0a0a, #1a1a1a);
        }

        .products-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 25px;
            overflow: hidden;
            transition: all 0.5s ease;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .product-image {
            height: 300px;
            background: linear-gradient(135deg, #2a2a2a, #1a1a1a);
            position: relative;
            overflow: hidden;
        }

        .product-image::before {
            content: '🔥';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            opacity: 0.3;
        }

        .product-info {
            padding: 2rem;
        }

        .product-info h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #ffffff;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: #d4af37;
            margin-bottom: 1rem;
        }

        .product-description {
            color: #aaaaaa;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .add-to-cart {
            width: 100%;
            padding: 1rem;
            background: transparent;
            border: 2px solid #d4af37;
            color: #d4af37;
            font-weight: 600;
            letter-spacing: 1px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .add-to-cart:hover {
            background: #d4af37;
            color: #000;
            transform: translateY(-2px);
        }

        /* Newsletter Section */
        .newsletter {
            padding: 6rem 2rem;
            background: rgba(212, 175, 55, 0.1);
            text-align: center;
        }

        .newsletter-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .newsletter h2 {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 1rem;
            letter-spacing: 2px;
        }

        .newsletter p {
            color: #cccccc;
            margin-bottom: 2rem;
            font-size: 1.1rem;
        }

        .newsletter-form {
            display: flex;
            gap: 1rem;
            max-width: 400px;
            margin: 0 auto;
        }

        .newsletter-input {
            flex: 1;
            padding: 1rem 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            color: #ffffff;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .newsletter-input:focus {
            border-color: #d4af37;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.3);
        }

        .newsletter-input::placeholder {
            color: #888;
        }

        .newsletter-btn {
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #d4af37, #ffd700);
            color: #000;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.4);
        }

        /* Footer */
        .footer {
            background: #050505;
            padding: 4rem 2rem 2rem;
            text-align: center;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-content {
            max-width: 1400px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-links a {
            color: #aaaaaa;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #d4af37;
        }

        .footer-bottom {
            color: #666;
            font-size: 0.9rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Animations */
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

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .newsletter-form {
                flex-direction: column;
            }

            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }

            .features-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Scroll Effects */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease;
        }

        .scroll-reveal.visible {
            opacity: 1;
            transform: translateY(0);
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

            0%,
            100% {
                transform: scale(1);
                opacity: 0.7;
            }

            50% {
                transform: scale(1.2);
                opacity: 0.3;
            }
        }

        .golden-line {
            height: 2px;
            background: linear-gradient(90deg, transparent, #d4af37, transparent);
            margin: 4rem auto;
            width: 200px;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">LUXE ATELIER</div>
            <ul class="nav-links">
                <li><a href="#inicio">INICIO</a></li>
                <li><a href="#colecciones">COLECCIONES</a></li>
                <li><a href="#exclusivos">EXCLUSIVOS</a></li>
                <li><a href="#contacto">CONTACTO</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="inicio">
        <div class="luxury-accent"></div>
        <div class="hero-content">
            <h1 class="floating">ELEGANCIA REDEFINIDA</h1>
            <p>Descubre nuestra colección exclusiva de alta costura donde cada pieza cuenta una historia de
                sofisticación y estilo atemporal.</p>
            <a href="#colecciones" class="cta-button">EXPLORAR COLECCIÓN</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features scroll-reveal" id="colecciones">
        <div class="features-container">
            <h2 class="section-title">EXPERIENCIA PREMIUM</h2>
            <div class="golden-line"></div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">✨</div>
                    <h3>DISEÑOS EXCLUSIVOS</h3>
                    <p>Cada pieza es única, creada por diseñadores reconocidos mundialmente para ofrecerte lo mejor en
                        moda de lujo.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🏆</div>
                    <h3>CALIDAD SUPERIOR</h3>
                    <p>Utilizamos únicamente materiales premium y técnicas artesanales para garantizar la máxima calidad
                        en cada prenda.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🚚</div>
                    <h3>ENTREGA VIP</h3>
                    <p>Servicio de entrega personalizado y envío express gratuito para que recibas tu compra en tiempo
                        récord.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Showcase -->
    <section class="products scroll-reveal" id="exclusivos">
        <div class="products-container">
            <h2 class="section-title">PRODUCTOS DESTACADOS</h2>
            <div class="golden-line"></div>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image"></div>
                    <div class="product-info">
                        <h3>Blazer Milano Signature</h3>
                        <div class="product-price">$2,890</div>
                        <p class="product-description">Blazer de corte impecable confeccionado en lana italiana premium
                            con detalles dorados exclusivos.</p>
                        <button class="add-to-cart">AÑADIR AL CARRITO</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image"></div>
                    <div class="product-info">
                        <h3>Vestido Noir Elegance</h3>
                        <div class="product-price">$3,450</div>
                        <p class="product-description">Vestido de gala en seda francesa con bordados artesanales y
                            silueta que realza la figura.</p>
                        <button class="add-to-cart">AÑADIR AL CARRITO</button>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image"></div>
                    <div class="product-info">
                        <h3>Abrigo Cashmere Royal</h3>
                        <div class="product-price">$4,750</div>
                        <p class="product-description">Abrigo largo en cashmere 100% con forro de seda y acabados de
                            lujo para el invierno más elegante.</p>
                        <button class="add-to-cart">AÑADIR AL CARRITO</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter scroll-reveal">
        <div class="newsletter-container">
            <h2>SUSCRÍBETE A NUESTRAS NOVEDADES</h2>
            <p>Sé el primero en conocer nuestras nuevas colecciones y ofertas exclusivas</p>
            <form class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Tu email aquí">
                <button type="submit" class="newsletter-btn">SUSCRIBIRSE</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contacto">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#terminos">Términos y Condiciones</a>
                <a href="#privacidad">Política de Privacidad</a>
                <a href="#envios">Envíos</a>
                <a href="#devoluciones">Devoluciones</a>
                <a href="#soporte">Soporte</a>
            </div>
            <div class="golden-line" style="width: 100px;"></div>
            <div class="footer-bottom">
                <p>&copy; 2025 LUXE ATELIER. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll reveal animation
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });

        // Navbar background on scroll
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 100) {
                navbar.style.background = 'rgba(10, 10, 10, 0.98)';
            } else {
                navbar.style.background = 'rgba(10, 10, 10, 0.95)';
            }
        });

        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function () {
                this.style.background = '#28a745';
                this.style.borderColor = '#28a745';
                this.style.color = '#fff';
                this.textContent = '✓ AÑADIDO';

                setTimeout(() => {
                    this.style.background = 'transparent';
                    this.style.borderColor = '#d4af37';
                    this.style.color = '#d4af37';
                    this.textContent = 'AÑADIR AL CARRITO';
                }, 2000);
            });
        });

        // Newsletter form
        document.querySelector('.newsletter-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const input = this.querySelector('.newsletter-input');
            const btn = this.querySelector('.newsletter-btn');

            btn.style.background = '#28a745';
            btn.textContent = '✓ SUSCRITO';
            input.value = '';

            setTimeout(() => {
                btn.style.background = 'linear-gradient(135deg, #d4af37, #ffd700)';
                btn.textContent = 'SUSCRIBIRSE';
            }, 3000);
        });
    </script>
</body>

</html>