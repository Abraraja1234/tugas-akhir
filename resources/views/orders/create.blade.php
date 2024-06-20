<!-- resources/views/orders/create.blade.php -->

@extends('layouts.app')

@section('title', 'Create New Order')

@section('contents')
<div class="max-w-4xl mx-auto py-6 sm:px-6 lg:px-8">
    <h1 class="font-bold text-2xl mb-4">Create New Order</h1>
    <form action="{{ route('admin/orders/store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="customer_name" class="block text-sm font-medium text-gray-700">Customer Name</label>
            <input type="text" name="customer_name" id="customer_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
            <input type="text" name="product_name" id="product_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm" required>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium px-4 py-2 rounded-lg">Create Order</button>
        </div>
    </form>
</div>
@endsection
