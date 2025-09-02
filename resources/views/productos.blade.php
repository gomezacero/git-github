<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .productos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .producto-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .producto-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        .producto-imagen {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .producto-nombre {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .producto-descripcion {
            color: #666;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .producto-precio {
            font-size: 1.8rem;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 15px;
        }

        .producto-id {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #667eea;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .btn-ver-mas {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-ver-mas:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .navegacion {
            text-align: center;
            margin: 40px 0;
        }

        .btn-inicio {
            background: rgba(255,255,255,0.2);
            color: white;
            border: 2px solid white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-inicio:hover {
            background: white;
            color: #667eea;
            transform: scale(1.05);
        }

        .stats {
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            color: white;
            text-align: center;
        }

        .stats h3 {
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .productos-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🛍️ Catálogo de Productos</h1>
            <p>Descubre nuestra increíble selección de productos tecnológicos</p>
        </div>

        <div class="stats">
            <h3>📊 Estadísticas</h3>
            <p>Total de productos disponibles: <strong>{{ count($productos) }}</strong></p>
            <p>Precio promedio: <strong>${{ number_format(collect($productos)->avg('precio'), 2) }}</strong></p>
        </div>

        <div class="navegacion">
            <a href="/" class="btn-inicio">🏠 Volver al Inicio</a>
        </div>

        <div class="productos-grid">
            @forelse($productos as $producto)
                <div class="producto-card">
                    <div class="producto-id">ID: {{ $producto['id'] }}</div>
                    
                    <img src="{{ $producto['imagen'] }}" 
                         alt="{{ $producto['nombre'] }}" 
                         class="producto-imagen">
                    
                    <h3 class="producto-nombre">{{ $producto['nombre'] }}</h3>
                    
                    <p class="producto-descripcion">{{ $producto['descripcion'] }}</p>
                    
                    <div class="producto-precio">${{ number_format($producto['precio'], 2) }}</div>
                    
                    <button class="btn-ver-mas" onclick="verDetalles({{ $producto['id'] }})">
                        Ver Detalles 🔍
                    </button>
                </div>
            @empty
                <div style="grid-column: 1/-1; text-align: center; color: white; font-size: 1.5rem;">
                    <p>😔 No hay productos disponibles en este momento</p>
                </div>
            @endforelse
        </div>
    </div>

    <script>
        function verDetalles(id) {
            alert(`¡Proximamente podrás ver los detalles del producto con ID: ${id}!`);
        }

        // Animación de entrada para las tarjetas
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.producto-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(50px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 100);
            });
        });
    </script>
</body>
</html>
