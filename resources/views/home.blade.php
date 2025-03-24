@extends('layouts.menu')

@section('title', 'Accueil')

@section('content')



{{-- Affichage d'un message de succès si un produit est supprimé --}}

@if (session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif


{{-- Section principale : affichage des produits --}}


<div class="max-w-4xl mx-auto">
    <h1 class="font-montserrat text-1xl text-gray-500 flex items-center justify-center gap-4 mb-6 mt-8">
        <span class="h-px flex-1 bg-gray-200"></span>
        PRODUCTS
        <span class="h-px flex-1 bg-gray-200"></span>
    </h1>

    <div class="font-montserrat grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($products as $product)
            <div class="bg-white shadow-md flex flex-col justify-between">
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-70 sm:h-64 object-cover mb-4">

                <h2 class="text-xl text-gray-600 mb-2 text-center">{{ $product->name }}</h2>
                <p class="text-sm text-gray-400 text-center p-3">{{ Str::limit($product->description, 150) }}</p>
                <p class="mt-5 mb-3 text-gray-700 text-xs text-center">READ MORE →</p>

                {{-- Formulaire de suppression de produit --}}


                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="text-right mb-4 pr-5">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-xs">X</button>
                </form>
            </div>
        @endforeach
    </div>

    <div class="mt-20 mb-20">
        {{ $products->links() }}
    </div>
</div>
@endsection
