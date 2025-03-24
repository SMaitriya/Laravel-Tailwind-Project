<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    {{-- Chargement du CSS via Vite --}}
    @vite('resources/css/app.css')

    {{-- Titre dynamique selon la page --}}
    <title>@yield('title')</title>
</head>

<body>

    {{-- Barre de navigation principale --}}
    <nav class="font-montserrat bg-gray-800 text-white p-4 shadow-md flex-wrap">
        <ul class="flex flex-col sm:flex-row justify-center sm:space-x-10 space-y-5 sm:space-y-0 text-center">
            <li><a href="{{ route('products.index') }}" class="hover:text-yellow-400">Home</a></li>
            <li><a href="{{ route('products.create') }}" class="hover:text-yellow-400">Add a product</a></li>
            <li><a href="{{ route('products.edit.list') }}" class="hover:text-yellow-400">Edit a product</a></li>
        </ul>
    </nav>

    {{-- Contenu spécifique à chaque page --}}
    @yield('content')

</body>
</html>
