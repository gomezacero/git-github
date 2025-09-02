<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productos', function () {
    // Datos de ejemplo para los productos
    $productos = [
        [
            'id' => 1,
            'nombre' => 'Laptop Gaming',
            'precio' => 1299.99,
            'descripcion' => 'Laptop para gaming de alto rendimiento',
            'imagen' => 'https://via.placeholder.com/300x200?text=Laptop'
        ],
        [
            'id' => 2,
            'nombre' => 'Smartphone Pro',
            'precio' => 899.99,
            'descripcion' => 'Teléfono inteligente con cámara profesional',
            'imagen' => 'https://via.placeholder.com/300x200?text=Smartphone'
        ],
        [
            'id' => 3,
            'nombre' => 'Auriculares Inalámbricos',
            'precio' => 199.99,
            'descripcion' => 'Auriculares con cancelación de ruido',
            'imagen' => 'https://via.placeholder.com/300x200?text=Auriculares'
        ],
        [
            'id' => 4,
            'nombre' => 'Tablet Pro',
            'precio' => 649.99,
            'descripcion' => 'Tablet para productividad y entretenimiento',
            'imagen' => 'https://via.placeholder.com/300x200?text=Tablet'
        ],
        [
            'id' => 5,
            'nombre' => 'Monitor 4K',
            'precio' => 399.99,
            'descripcion' => 'Monitor Ultra HD de 27 pulgadas',
            'imagen' => 'https://via.placeholder.com/300x200?text=Monitor'
        ],
        [
            'id' => 6,
            'nombre' => 'Teclado Mecánico',
            'precio' => 149.99,
            'descripcion' => 'Teclado mecánico RGB para gaming',
            'imagen' => 'https://via.placeholder.com/300x200?text=Teclado'
        ]
    ];
    
    return view('productos', compact('productos'));
});
