@extends('layouts.menu')

@section('title', 'Edit Products')

@section('content')

{{-- Affichage d'un message de succès après la mise à jour d'un produit --}}
@if (session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

{{-- Vérifie s'il y a des produits à afficher --}}

@if ($products->isEmpty())
    <p class="text-center text-gray-500 mt-4">No products available</p>
@else

    {{-- Produits à modifier --}}

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-8 px-10">
        @foreach ($products as $product)
            <div class="bg-white shadow rounded-lg p-4 flex flex-col justify-between text-center">
                
                {{-- Image du produit --}}
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-85 object-cover mb-4">
                
                {{-- Nom du produit --}}
                <h2 class="text-lg font-semibold text-gray-800 mb-2">{{ $product->name }}</h2>
                
                {{-- Lien pour modifier le produit --}}
                <a href="{{ route('products.edit', $product->id) }}" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 text-sm">
                    ✏️ Edit
                </a>
            </div>
        @endforeach
    </div>
@endif

@endsection
