<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadata untuk mengatur charset, viewport, dan deskripsi -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login ke akun KulinerKreatif Anda untuk mengakses resep favorit dan fitur eksklusif.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login - KulinerKreatif</title>
</head>

<body class="bg-mainColor text-white tracking-wider h-screen flex flex-col">
    <!-- Header -->
    <header class="bg-headerColor">
        <!-- Navigasi -->
        <nav class="container flex justify-between items-center py-4 px-5">
            <!-- Logo -->
            <div class="w-20 text-orange font-bold text-3xl">
                <a href="/" class="flex items-center">
                    <span class="text-white">Kuliner</span>Kreatif
                </a>
            </div>

            <!-- Menu Navigasi -->
            <div>
                <ul class="flex items-center space-x-6">
                    <li><a href="/" class="hover:text-blue ease-in duration-200">Home</a></li>
                    <li><a href="/about" class="hover:text-blue ease-in duration-200">About</a></li>
                    <li><a href="/register" class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Register</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main class="flex-grow flex items-center justify-center">
        <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-md p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Login Kuliner<span class="text-orange">Kreatif</span></h2>
            <!-- Form Login -->
            <form method="POST" action="/login/auth">
                @csrf
                <!-- Input Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 text-mainColor rounded-md focus:outline-none focus:ring-2 focus:ring-blue" required>
                </div>
                <!-- Input Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-bold mb-2">Password:</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 text-mainColor rounded-md focus:outline-none focus:ring-2 focus:ring-blue" required>
                </div>
                <!-- Link untuk registrasi -->
                <div class="mb-6 hover:text-blue ease-in duration-200">
                    <a href="/register">don't have account?</a>
                </div>
                <!-- Tombol Login -->
                <div>
                    <button type="submit" class="w-full bg-blue px-3 py-2 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Login</button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-mainColor text-white">
        <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
            <span class="block text-center w-full">
                © 2024 KulinerKreatif. All Rights Reserved.
            </span>
        </div>
    </footer>
</body>

</html>
