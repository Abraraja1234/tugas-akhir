<?php

// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\Checkout;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil jumlah produk, pesanan, dan checkout
        $productsCount = Product::count();
        $ordersCount = Order::count();
        $checkoutsCount = Checkout::count();

        // Data untuk Chart.js
        $chartData = [
            'labels' => ['Products', 'Orders', 'Checkouts'],
            'datasets' => [
                [
                    'label' => 'Count',
                    'backgroundColor' => ['#3490dc', '#38c172', '#ffed4a'],
                    'data' => [$productsCount, $ordersCount, $checkoutsCount],
                ]
            ]
        ];

        // Mengirim data ke view
        return view('dashboard', compact('productsCount', 'ordersCount', 'checkoutsCount', 'chartData'));
    }
}

