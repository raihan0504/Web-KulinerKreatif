<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Selamat datang di KulinerKreatif, tempat Anda menemukan resep kuliner yang kreatif dan lezat setiap hari.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>KulinerKreatif</title>
</head>

<body class="bg-mainColor text-white tracking-wider overflow-auto backdrop-blur-md" style="background-image: url('{{ asset('assets/food2.jpg') }}')">
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
                            <button  type="submit" class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200 text-white">Logout</button>
                        </form>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        <!-- Bagian Home dengan latar belakang gambar -->
        <section id="Home" class="bg-cover bg-center h-[90vh]" style="background-image: url('{{ asset('assets/food2.jpg') }}')">
            <div class="container py-20">
                <div class="flex items-center justify-start z-20 md:flex-row">
                    <div class="mt-20 text-center mb-12 md:text-left md:w-1/2 md:pr-10 pl-4 md:pl-32 ">
                        <h1 class="text-3xl md:text-4xl font-bold leading-snug pb-3">Selamat datang di dunia rasa dan kreasi kuliner!</h1>
                        <p class="leading-relaxed mb-10">Dapatkan inspirasi baru setiap hari dengan koleksi resep kami yang beragam,
                            mulai dari makanan ringan yang cocok untuk camilan sehari-hari hingga hidangan istimewa untuk acara spesial.</p>
                        <div>
                            <a href="/login" class="bg-blue px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bagian Resep -->
        <section class="container mx-auto py-8 px-4" >
           <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    <!-- Looping untuk menampilkan setiap resep -->
                    @foreach ($recipe as $resep)
                        <div class="bg-white text-black rounded-lg shadow-md overflow-hidden">
                            <a href="{{ route('recipes.tampil', $resep->id)}}" >
                                <img src="{{ asset('storage/' . $resep->image) }}" class="w-full h-48 object-cover"  alt="{{ $resep->title }}">
                                <div class="p-4">
                                    <h5 class="text-xl font-bold">{{ $resep->title }}</h5>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
           </div>
        </section>
    </main>
    <!-- Menyertakan file JavaScript -->
    <script src="{{asset('js/index.js')}}"></script>

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
