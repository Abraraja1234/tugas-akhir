<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('title', 'Home Product List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Product List</h1>
    <a href="{{ route('admin/products/create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Product</a>
    <hr />
    @if($products->count() > 0)
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">no</th>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Price</th>
                <th scope="col" class="px-6 py-3">Product Code</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->product_code }}</td>
                <td>{{ $product->description }}</td>
                <td class="w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('admin/products/show', $product->id) }}" class="text-blue-800">Detail</a> |
                        <a href="{{ route('admin/products/edit', $product->id) }}" class="text-green-800 pl-2">Edit</a> |
                        <form action="{{ route('admin/products/destroy', $product->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                            @csrf
                            @method('DELETE')
                            <button>Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td class="text-center" colspan="6">Product not found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
