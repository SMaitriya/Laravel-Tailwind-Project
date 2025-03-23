<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')


    <title>@yield('title')</title>

</head>

<body>

<nav class="font-montserrat bg-gray-800 text-white p-4 shadow-md">
    <ul class="flex justify-center space-x-20">
        <li><a href="{{ route('products.index') }}" class="hover:text-yellow-400">Home</a></li>
        <li><a href="{{ route('products.create') }}" class="hover:text-yellow-400">Add a product</a></li>
        <li><a href="/edit" class="hover:text-yellow-400">Edit a product</a></li>

    </ul>
</nav>

        @yield('content')


</body>
</html>
