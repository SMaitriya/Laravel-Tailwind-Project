<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')

    <title>@yield('title')</title>

</head>

<body>

<nav class="bg-gray-800 text-white p-4">
    <ul class="flex justify-center space-x-20">
        <li><a href="/home" class="hover:text-yellow-400">Home</a></li>
        <li><a href="/add" class="hover:text-yellow-400">Add a product</a></li>
        <li><a href="/edit" class="hover:text-yellow-400">Edit a product</a></li>

    </ul>
</nav>

    <div class="container mt-4">
        @yield('content')
    </div>


</body>
</html>
