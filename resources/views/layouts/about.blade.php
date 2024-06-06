<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About KulinerKreatif">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>About - KulinerKreatif</title>
</head>

<body class="bg-mainColor text-white tracking-wider min-h-screen flex flex-col bg-cover backdrop-blur-md" style="background-image: url('{{ asset('assets/bahan2.jpg') }}')">
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
                    <input onkeydown="search(event)" id="search" placeholder="Cari" name="cari" type="text" class=" placeholder:text-[#b3b3b3] w-[360px] bg-white/0 rounded-2xl text-[16px] px-2 font-medium text-white focus:outline-none border border-white">
                </form>
            </div>
            <!-- Menu Navigasi -->
            <div>
                <ul class="flex items-center space-x-6">
                    <li><a href="/" class="hover:text-blue ease-in duration-200">Home</a></li>
                    <li><a href="/about" class="hover:text-blue ease-in duration-200">About</a></li>
                    <!-- Kondisi untuk menampilkan link Login atau Logout -->
                    @guest
                    <li><a href="/login" class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Login</a></li>
                    @else
                    <li>
                        <form method="POST" action="/login/logout">
                            @csrf
                            <button type="submit" class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-white">Logout</button>
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    
    <!-- Konten Utama -->
    <main class="flex-grow">
        <div class="bg-white/10 rounded-lg shadow-md p-6 justify-center flex flex-col gap-5 box-border py-10 px-6 my-10 mx-10">
            <div class="px-10 gap-5">
                <h1 class="text-3xl font-bold mb-4 text-center">About KulinerKreatif</h1>
                <p class=""> Selamat datang di KulinerKreatif! Kami adalah komunitas pecinta kuliner yang bersemangat untuk berbagi dan menginspirasi Anda dengan resep-resep makanan kreatif dari berbagai belahan dunia.
                    Di KulinerKreatif, kami percaya bahwa memasak adalah seni yang dapat menghubungkan orang dari berbagai latar belakang dan budaya. Melalui platform ini, kami menyediakan kumpulan resep yang teruji dan dijamin lezat, mulai dari hidangan sehat hingga kreasi Nusantara yang inovatif.
                    Kami berdedikasi untuk menyajikan konten berkualitas tinggi yang tidak hanya menginspirasi, tetapi juga mudah diikuti oleh semua kalangan, dari pemula hingga ahli.
                    Kami juga percaya bahwa makanan dapat menjadi sarana untuk membangun komunitas yang kuat. Oleh karena itu, kami mendorong kolaborasi dan berbagi cerita di antara para pengunjung website kami. Jadilah bagian dari komunitas KulinerKreatif dan temukan keajaiban kuliner di setiap hidangan yang Anda buat.
                    Terima kasih telah bergabung dengan kami di KulinerKreatif. Selamat memasak dan selamat menikmati!
                </p>
            </div>
        </div>
    </main>
    @vite('resources/js/app.js')

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
