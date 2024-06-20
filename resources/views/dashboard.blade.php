<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
    <!-- Product Card -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-4">
            <h2 class="text-lg font-semibold">Products</h2>
            
        </div>
    </div>

    <!-- Order Card -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-4">
            <h2 class="text-lg font-semibold">Orders</h2>
           
        </div>
    </div>

    <!-- Checkout Card -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-4">
            <h2 class="text-lg font-semibold">Checkouts</h2>
           
        </div>
    </div>
</div>

<!-- Chart Section -->
<div class="bg-white rounded-lg shadow-md overflow-hidden mt-6 p-4">
    <h2 class="text-lg font-semibold">Overview Chart</h2>
    <canvas id="dashboardChart" class="mt-4"></canvas>
</div>

<!-- Include Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    var ctx = document.getElementById('dashboardChart').getContext('2d');
 
    var dashboardChart = new Chart(ctx, {
        type: 'bar',
        data: chartData,
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
});
</script>
@endsection
