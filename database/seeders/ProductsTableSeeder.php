<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Pizza Mexicana',
            'slug' => 'Pizza Mexicana',
            'details' => 'Totopos, guacamole, bolognesa al ají, tomate al ají y crema de fríjoles refritos.',
            'price' => 25000.00,
            'shipping_cost' => 29.99,
            'description' => 'Pizza mexicana',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'pizza-mexicana.jpg'
        ]);

        Product::create([
            'name' => 'Hamburguesa de Carne',
            'slug' => 'Hamburguesa de Carne',
            'details' => 'Jugosa carne 100% de res de 125 g, con delicioso queso mozzarella, verduras y salsas',
            'price' => 12000.00,
            'shipping_cost' => 19.99,
            'description' => 'Hamburguesa de Carne',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'hamburguesa-carne.jpg'
        ]);

        Product::create([
            'name' => 'Salchipapa Especial',
            'slug' => 'Salchipapa Especial',
            'details' => 'salchipa de 120gr con pollo desmechado, carne desmechada, champiñones.',
            'price' => 11500.00,
            'shipping_cost' => 14.99,
            'description' => 'Salchipapa Especial',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'salchipapa.jpeg'
        ]);

        Product::create([
            'name' => 'Perro Americano Sensillo',
            'slug' => 'Perro Americano Sensillo',
            'details' => 'Salchicha Americana, papitas Cabello de angel, Cebolla caramelizada, un Huevo Codornis.',
            'price' => 9000.00,
            'shipping_cost' => 1.89,
            'description' => 'Perro Americano Sensillo',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'perro-caliente.jpg'
        ]);

        Product::create([
            'name' => 'Mazorcada Mixta',
            'slug' => 'Mazorcada Mixta',
            'details' => 'Maiz tierno, carne Desmechada, Pollo Desmechado, papitas Cabello de Angel',
            'price' => 15000.00,
            'shipping_cost' => 12.59,
            'description' => 'Mazorcada Mixta',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'mazorcada.jpg'
        ]);

        Product::create([
            'name' => 'Lasaña Sensilla',
            'slug' => 'Lasaña Sensilla',
            'details' => 'Tamaño 125gr, Carne molida, pollo desmechado, papitas.',
            'price' => 13500.00,
            'shipping_cost' => 13.39,
            'description' => 'Lasaña Sensilla',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'lasaña.jpg'
        ]);

        Product::create([
            'name' => 'Empanada de pollo',
            'slug' => 'Empanada de pollo',
            'details' => 'Empanadas de Papa y Pollo super grandes acompañadas de un delicioso aji de la casa',
            'price' => 2200.00,
            'shipping_cost' => 6.79,
            'description' => 'Empanada de pollo',
            'category_id' => 2,
            'brand_id' => 5,
            'image_path' => 'empanadas.jpg'
        ]);

    }
}
