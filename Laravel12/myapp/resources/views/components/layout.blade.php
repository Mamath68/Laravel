@php use Illuminate\Support\Facades\Route; @endphp
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Laravel</title>
</head>
<body class="flex flex-col min-h-screen">
<header>
    <nav class="bg-white shadow-md p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Logo</a>
            <ul class="flex space-x-6">

                <x-link-item href="{{route('homepage')}}"
                             :active="Route::currentRouteName() === 'homepage'"
                             class="underline">
                    HomePage
                </x-link-item>
                <x-link-item href="{{route('projects')}}"
                             :active="Route::currentRouteName() === 'projects'"
                             class="underline">
                    Projects
                </x-link-item>
                <x-link-item href="{{route('recipes.index')}}"
                             :active="fnmatch('recipes.*', Route::currentRouteName())"
                             class="underline">
                    Recettes
                </x-link-item>
            </ul>
        </div>
    </nav>
</header>

<main class="flex-grow container mx-auto p-6">
    {{$slot }}
</main>

<footer class="bg-gray-100 text-center p-4">
    <p class="text-gray-600">&copy; 2025 Mon Site. Tous droits réservées.</p>
</footer>

</body>
</html>
