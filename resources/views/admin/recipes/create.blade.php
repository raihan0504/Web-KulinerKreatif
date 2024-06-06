<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Admin - Manage Recipes</title>
    <style>
        textarea {
            resize: none;
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-mainColor text-white tracking-wider overflow-auto">
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

            <!-- Form Add -->
            <section class="mb-8">
                <h2 class="text-2xl font-semibold mb-4">Add Recipe</h2>
                <form method="POST" action="/recipe/store" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-300">Recipe Name</label>
                        <input type="text" name="title" id="title" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-300">Description</label>
                        <textarea name="description" id="description" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="ingredients" class="block text-sm font-medium text-gray-300">Ingredients</label>
                        <textarea name="ingredients" id="ingredients" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="instructions" class="block text-sm font-medium text-gray-300">Instructions</label>
                        <textarea name="instructions" id="instructions" class="mt-1 block w-full bg-gray-700 text-white border-gray-600 rounded-md shadow-sm"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-medium text-gray-300">Recipe Image</label>
                        <input type="file" name="image" id="image" class="mt-1 block w-full text-white">
                    </div>
                    <button type="submit" class="bg-green-500 px-6 py-2 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-white">Save</button>
                </form>
            </section>
        </main>
    </div>

    <script>
        document.addEventListener('input', function (event) {
            if (event.target.tagName.toLowerCase() !== 'textarea') return;
            autoExpand(event.target);
        }, false);

        function autoExpand(textarea) {
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight + 'px';
        }
    </script>
</body>
</html>
