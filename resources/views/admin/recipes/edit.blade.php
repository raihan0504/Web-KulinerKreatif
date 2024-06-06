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
                    <button type="submit" class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-white">Logout</button>
                </form>
            </div>
        </nav>
    </header>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-60 bg-gray-800 h-screen p-4">
            <div class="text-2xl font-bold mb-6">Admin Panel</div>
            <ul>
                <li class="mb-4">
                    <a href="{{route('dashboard')}}" class="text-gray-300 hover:text-white">Dashboard</a>
                </li>
                <li class="mb-4">
                    <a href="{{route('create')}}" class="text-gray-300 hover:text-white">Add Recipe</a>
                </li>
                <li class="mb-4">
                    <a href="{{route('manage')}}" class="text-gray-300 hover:text-white">Manage Recipes</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">

            <!-- Recipe List -->
            <section>
                <h2 class="text-2xl font-semibold mb-4">Recipe List</h2>
                <table class="min-w-full bg-gray-700 text-white rounded-md shadow-sm">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example Recipe Row -->
                        @foreach ($recipe as $resep)
                        <tr>
                            <td class="border-t border-gray-600 px-4 py-2">{{$resep->title}}</td>
                            <td class="border-t border-gray-600 px-4 py-2 ">{{$resep->description}}</td>
                            <td class="border-t border-gray-600 px-4 py-2 ">
                                <div class="flex space-x-2">
                                    <a href="{{route('show.edit', $resep->id)}}" class="w-24 bg-yellow-500 py-2 px-8 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-white">Edit</a>
                                    <form method="POST" action="{{route('delete', $resep->id)}}" class="inline-block">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="w-24 bg-red-500 px-3 py-2 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-white">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Repeat for each recipe -->
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>
