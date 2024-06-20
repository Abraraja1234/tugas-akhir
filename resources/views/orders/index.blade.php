<!-- resources/views/orders/index.blade.php -->

@extends('layouts.app')

@section('title', 'Home Order List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Order List</h1>
    <a href="{{ route('admin/orders/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Order</a>
    <hr />
    @if($orders->count() > 0)
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 whitespace-nowrap">{{ $order->id }}</td>
                <td class="px-6 py-4">{{ $order->customer_name }}</td>
                <td class="px-6 py-4">{{ $order->product_name }}</td>
                <td class="px-6 py-4">{{ $order->quantity }}</td>
                <td class="px-6 py-4">{{ $order->price }}</td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <a href="{{ route('admin/orders/show', $order->id) }}" class="text-blue-800 hover:text-blue-600 mr-2">Detail</a>
                        <a href="{{ route('admin/orders/edit', $order->id) }}" class="text-green-800 hover:text-green-600 mr-2">Edit</a>
                        <form action="{{ route('admin/orders/destroy', $order->id) }}" method="POST" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-800 hover:text-red-600">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td class="text-center py-4" colspan="6">No orders found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
