@extends('layouts.menu')

@section('title', 'Add a Product')

@section('content')


{{-- Affichage d'un message de succès si un produit est ajouté --}}

@if (session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="flex justify-center">
    <div class=" w-full max-w-xl bg-white shadow-lg  p-8 mt-10 mb-20">

         
        {{-- Formulaire d'ajout de produit --}}
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">

            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label for="type" class="block text-sm font-medium text-gray-700">Product Type</label>
                <input type="text" name="type" id="type" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Price (€)</label>
                <input type="number" name="price" id="price" step="0.01" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required>
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none" required></textarea>
            </div>

            <div>
                <label for="photo" class="block text-sm font-medium text-gray-700">Photo</label>
                <input type="file" name="photo" id="photo" class="mt-1 block w-full text-gray-600 border border-gray-300 rounded-lg p-3 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" required>
            </div>


            {{-- Bouton de soumission --}}


            <div class="text-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 transition text-white font-semibold py-3 px-6 rounded-lg w-full">
                    Add Product
                </button>
          

            </div>
        </form>
    </div>
</div>
@endsection
