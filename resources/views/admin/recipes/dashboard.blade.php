<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin - Manage Recipes</title>
</head>

<body class="bg-mainColor text-white tracking-wider">
    <header class="bg-headerColor py-4 px-5">
        <nav class="container flex justify-between items-center">
            <div class="flex items-center mr-auto">
                <div class="w-20 text-orange font-bold text-3xl">
                    <a href="#Home" class="flex items-center">
                        <span class="text-white">Kuliner</span>Kreatif
                    </a>
                </div>
            </div>
            <div class="flex items-center ml-auto">
                <form method="POST" action="/login/logout">
                    @csrf
                    <button type="submit"
                        class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-white">Logout</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-60 bg-gray-800 h-screen p-4 ">
            <div class="text-2xl font-bold mb-6">Admin Panel</div>
            <ul>
                <li class="mb-4">
                    <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white">Dashboard</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('create') }}" class="text-gray-300 hover:text-white">Add Recipe</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('manage') }}" class="text-gray-300 hover:text-white">Manage Recipes</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <h1 class="text-4xl font-bold mb-8">Dashboard</h1>
            <div class="bg-white/20 rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Recipe Statistics</h2>
                <p>Total number of recipes: <span class="font-bold">{{ $recipeCount }}</span></p>
            </div>
        </main>

    </div>
</body>

</html>
