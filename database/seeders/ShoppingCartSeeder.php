<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShoppingCart;
use App\Models\User; // Pastikan Anda mengimport model User dan Product jika belum dilakukan

class ShoppingCartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil beberapa pengguna acak
        $users = User::inRandomOrder()->limit(5)->get();

        // Loop melalui setiap pengguna
        foreach ($users as $user) {
            // Buat beberapa entri keranjang belanja untuk setiap pengguna
            for ($i = 0; $i < 3; $i++) {
                // Di sini Anda dapat menyesuaikan entri keranjang belanja sesuai kebutuhan
                // Misalnya, dengan memilih produk secara acak dan menetapkan jumlah acak
                $product_id = random_int(1, 10); // asumsikan ada 10 produk dalam aplikasi Anda
                $quantity = random_int(1, 5); // misalnya, jumlah produk antara 1 dan 5
                
                // Buat entri keranjang belanja baru
                ShoppingCart::create([
                    'user_id' => $user->id,
                    'product_id' => $product_id,
                    'quantity' => $quantity,
                ]);
            }
        }
    }
}
