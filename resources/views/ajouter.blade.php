@extends('layouts.menu')

@section('title', 'Add a Product')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">Add a Product</h1>

<form action="" method="POST" enctype="multipart/form-data" class="space-y-6 max-w-lg mx-auto bg-white p-6 rounded shadow">
    @csrf

    <div>
        <label for="name" class="block mb-2 font-semibold">Product Name</label>
        <input type="text" name="name" id="name" class="border border-gray-300 p-3 w-full rounded" required>
    </div>
   
    <div>
        <label for="type" class="block mb-2 font-semibold">Product Type</label>
        <input type="text" name="type" id="type" class="border border-gray-300 p-3 w-full rounded" required>
    </div>

    <div>
        <label for="price" class="block mb-2 font-semibold">Price (€)</label>
        <input type="number" name="price" id="price" class="border border-gray-300 p-3 w-full rounded" step="0.01" required>
    </div>

    <div>
        <label for="description" class="block mb-2 font-semibold">Description</label>
        <textarea name="description" id="description" class="border border-gray-300 p-3 w-full rounded" rows="4"></textarea>
    </div>

    <div>
        <label for="photo" class="block mb-2 font-semibold">Photo</label>
        <input type="file" name="photo" id="photo" class="border border-gray-300 p-3 w-full rounded">
    </div>

    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded">Add Product</button>
</form>
@endsection
