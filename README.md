# KulinerKreatif

KulinerKreatif adalah sebuah Sistem Manajemen Kuliner yang dibangun menggunakan framework Laravel dan Tailwind CSS. Sistem ini bertujuan untuk menyediakan platform bagi pengguna untuk mencari, berbagi, dan berinteraksi dengan resep kuliner kreatif. Terdapat 2 peran utama dalam sistem ini: Pengguna dan admin, masing-masing dengan fungsionalitas spesifik yang disesuaikan dengan kebutuhan mereka.

## Fitur Utama

### Pengguna
- Registrasi dan Login
- Pencarian dan Penelusuran Resep
- Komentar dan Review

### Admin
- Manajemen Resep
- Menambah Resep
- Analitik Resep

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal proyek ini di mesin lokal Anda.

### Prasyarat

Pastikan Anda telah menginstal:
- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL

### Langkah-langkah Instalasi

1. **Clone Repository**
    ```bash
    git clone https://github.com/raihan0504/Web-KulinerKreatif.git
    cd kulinerkreatif
    ```

2. **Instal Dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Konfigurasi Environment**
    Salin file `.env.example` ke `.env` dan sesuaikan konfigurasi database Anda:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4. **Migrasi Database**
    Buat dan migrasikan tabel database:
    ```bash
    php artisan migrate
    ```

5. **Jalankan Server Pengembangan**
    ```bash
    php artisan serve
    npm run dev
    ```

## Penggunaan

Setelah instalasi, Anda dapat mengakses aplikasi pada `http://localhost:8000`. Daftar sebagai pengguna, dan Anda akan dapat menjelajahi resep-resep kuliner kreatif. Admin dapat mengakses panel admin untuk mengelola resep.

## Kontribusi

Kami menerima kontribusi dari siapa saja yang tertarik untuk meningkatkan proyek ini. Berikut adalah cara Anda dapat berkontribusi:

1. **Fork Repository Ini**
2. **Buat Branch Fitur**
    ```bash
    git checkout -b fitur-baru
    ```
3. **Commit Perubahan Anda**
    ```bash
    git commit -m 'Tambah fitur baru'
    ```
4. **Push ke Branch**
    ```bash
    git push origin fitur-baru
    ```
5. **Buat Pull Request**



## Kontak

Jika Anda memiliki pertanyaan atau masukan, silakan hubungi kami di mhd.raihan0504@gmail.com dan cutdahliana0@gmail.com.

---

Terima kasih telah menggunakan KulinerKreatif!
