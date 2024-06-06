<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Detail Resep KulinerKreatif">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Menggunakan directive @vite untuk menyertakan file CSS -->
    @vite('resources/css/app.css')
    <title>Detail Resep - KulinerKreatif</title>
</head>

<body class="bg-mainColor text-white tracking-wider overflow-auto relative bg-cover backdrop-blur-md"
    style="background-image: url('{{ asset('assets/food2.jpg') }}')">
    <!-- Header -->
    <header class="bg-headerColor">
        <!-- Navigasi -->
        <nav class="container flex justify-between items-center py-4 px-5">
            <!-- Logo dan Form Pencarian -->
            <div class="w-20 text-orange font-bold text-3xl flex items-center gap-4">
                <a href="/" class="flex items-center">
                    <span class="text-white">Kuliner</span>Kreatif
                </a>
                <form id="search-form" action="/search" method="POST">
                    @csrf
                    <input onkeydown="search(event)" id="search" placeholder="Cari" name="cari" type="text"
                        class=" placeholder:text-[#b3b3b3] w-[360px] bg-white/0 rounded-2xl text-[16px] px-2 font-medium text-white focus:outline-none border border-white">
                </form>
            </div>

            <!-- Menu Navigasi -->
            <div>
                <ul class="flex items-center space-x-6">
                    <li><a href="/" class="hover:text-blue ease-in duration-200">Home</a></li>
                    <li><a href="/about" class="hover:text-blue ease-in duration-200">About</a></li>
                    <!-- Kondisi untuk menampilkan link Login atau Logout -->
                    @guest
                        <li><a href="/login"
                                class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Login</a>
                        </li>
                    @else
                        <li>
                            <form method="POST" action="/login/logout">
                                @csrf
                                <button type="submit"
                                    class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-white">Logout</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        <div id="ingredients" class="text-white flex flex-col gap-10 w-screen items-center box-border py-10 px-6">
            <div class="w-full text-center mb-10">
                <p class="font-bold text-2xl">{{ $recipe->title }}</p>
            </div>
            <div class="w-full flex justify-between items-start gap-5">
                <div class="w-[40%] flex flex-col items-start gap-5">
                    <div class="w-[400px] h-[290px] ml-28 overflow-hidden">
                        <!-- Gambar Resep -->
                        <img src="{{ asset('storage/' . $recipe->image) }}" alt="{{ $recipe->title }}"
                            class="h-full w-full object-cover rounded-lg float-left">
                    </div>
                </div>
                <div class="w-[60%] flex mr-[130px] mt-[30px]">
                    <!-- Deskripsi Resep -->
                    <p class="w-full text-justify whitespace-pre-line font-medium text-md">{{ $recipe->description }}</p>
                </div>
            </div>
            <div class="w-full flex justify-center items-start gap-2">
                <div class="w-[40%] flex flex-col">
                    <p class="font-bold text-2xl">Bahan-bahan</p>
                    <!-- Bahan-bahan Resep -->
                    <p class="w-full text-justify whitespace-pre-line font-medium text-md">{{ $recipe->ingredients }}</p>
                </div>
                <div class="w-[40%] flex flex-col">
                    <p class="font-bold text-2xl">Cara Masak</p>
                    <!-- Cara Memasak -->
                    <p class="w-full text-justify whitespace-pre-line font-medium text-md">{{ $recipe->instructions }}</p>
                </div>
            </div>
        </div>


        <!-- Bagian Komentar -->
        <div
            class="bg-white/10 rounded-lg shadow-md p-6 justify-center flex flex-col gap-5 box-border py-10 px-6 my-10 mx-10">
            <h2 class="text-2xl font-bold mb-4 text-center">Comments</h2>

            @foreach ($recipe->comments as $comment)
                <div class="bg-white/20 rounded-lg p-4 mb-4">
                    <!-- Nama Pengguna -->
                    <p class="font-semibold">{{ $comment->user->name }}</p>
                    <!-- Tanggal Komentar -->
                    <p class="text-sm">{{ $comment->created_at->format('d M Y, H:i') }}</p>
                    <!-- Isi Komentar -->
                    <p class="mt-2">{{ $comment->body }}</p>
                    @if (auth()->check() && auth()->id() == $comment->user_id)
                    <!-- Tombol Hapus Komentar -->
                        <form action="{{ route('comments.destroy', $comment) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this comment?');">
                            @csrf
                            <button type="submit" class="text-red-500 hover:underline mt-2">Delete</button>
                        </form>
                    @endif
                </div>
            @endforeach

            @auth
                <!-- Form Tambah Komentar -->
                <form action="{{ route('comments.store', $recipe) }}" method="POST" class="w-full">
                    @csrf
                    <textarea name="body" rows="4" class="w-full p-2 rounded-lg bg-white/10 border border-white focus:outline-none"
                        placeholder="Add a comment..."></textarea>
                    <button type="submit"
                        class="bg-blue px-4 py-2 rounded-md mt-2 hover:opacity-80 duration-200">Submit</button>
                </form>
            @else
                <!-- Pesan Login untuk Komentar -->
                <p class="text-center">You must <a href="/login" class="text-blue underline">log in</a> to add a comment.
                </p>
            @endauth
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

    <!-- Menggunakan directive @vite untuk menyertakan file JavaScript -->
    @vite('resources/js/app.js')
</body>

</html>
