<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan data produk di sini
        Product::create([
            'title' => 'Product 1',
            'price' => 100,
            'product_code' => 'P001',
            'description' => 'Description for Product 1',
        ]);

        Product::create([
            'title' => 'Product 2',
            'price' => 200,
            'product_code' => 'P002',
            'description' => 'Description for Product 2',
        ]);

        // Tambahkan produk lainnya sesuai kebutuhan
    }
}
