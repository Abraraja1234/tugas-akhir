<!-- resources/views/orders/show.blade.php -->

@extends('layouts.app')

@section('title', 'Order Details')

@section('contents')
<div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="font-bold text-2xl mb-4">Order Details</h1>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <p><strong>ID:</strong> {{ $order->id }}</p>
            <p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
            <p><strong>Product Name:</strong> {{ $order->product_name }}</p>
            <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
            <p><strong>Price:</strong> {{ $order->price }}</p>
            <p><strong>Created At:</strong> {{ $order->created_at->format('Y-m-d H:i:s') }}</p>
            <p><strong>Updated At:</strong> {{ $order->updated_at->format('Y-m-d H:i:s') }}</p>
        </div>
    </div>
</div>
@endsection
