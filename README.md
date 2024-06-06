# KulinerKreatif

Membangun sebuah Sistem Manajemen Kuliner Kreatif dengan menggunakan framework Laravel dan Tailwind CSS dapat dibagi menjadi beberapa tahap. Sistem ini juga akan memiliki dua peran: Pengguna dan admin. Setiap peran akan memiliki fungsionalitas spesifik yang disesuaikan dengan kebutuhan mereka.

## Fitur

### Peran Pengguna
- *Melihat Resep*: Pengguna dapat melihat resep makanan baik sudah login maupun tidak.
- *Komentar*: Pengguna dapat memberikan komentar pada tiap resep.

### Peran Admin
- *Manajemen resep*: Admin dapat melihat, mengedit dan menghapus resep yang ada.
- *Melihat Dashboard*: Admin dapat melihat seberapa banyak resep yang telah dibuat.
- *Menambah Resep*: Admin dapat menambahkan resep.

## Instalasi

Untuk menginstal dan menjalankan proyek ini secara lokal, ikuti langkah-langkah berikut:

1. *Clone repositori*:
   bash
   git clone https://github.com/asans22/Sistem-Manajemen-klinik.git
   cd sistem-manajemen-klinik
   

2. *Instal dependensi*:
   bash
   composer install
   npm install
   

3. *Salin file environment contoh dan konfigurasikan variabel lingkungan Anda*:
   bash
   cp .env.example .env
   

4. *Generate kunci aplikasi*:
   bash
   php artisan key:generate
   

5. *Jalankan migrasi database*:
   bash
   php artisan migrate
   

6. *Seed database (opsional)*:
   bash
   php artisan db:seed
   
7. *Import database dari file sistem_manajemen_klinik.sql (opsional)*:
   bash
   -buka phpmyadmin
   -import file sistem_manajemen_klinik.sql
   

8. *Kompilasi aset*:
   bash
   npm run dev
   

9. *Mulai server pengembangan lokal*:
   bash
   php artisan serve
   

## Penggunaan

Setelah menyelesaikan langkah-langkah instalasi, Anda dapat mengakses aplikasi di http://localhost:8000. Bergantung pada peran yang diberikan kepada akun Anda, Anda akan memiliki akses ke fungsionalitas yang berbeda seperti yang dijelaskan di atas.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

1. Fork repositori.
2. Buat branch baru (git checkout -b fitur/FiturAnda).
3. Commit perubahan Anda (git commit -am 'Tambahkan fitur baru').
4. Push ke branch (git push origin fitur/FiturAnda).
5. Buat Pull Request baru.

## Team members:
1. Ahmad Syah Ramadhan 2208107010033
2. Agil Mughni 2208107010025


## Kontak

Untuk pertanyaan atau saran, silakan hubungi saya di [ahmadsyahrmdn@gmail.com] atau rekan saya [agilmughni1@gmail.com].

---

README ini memberikan gambaran umum tentang Sistem Manajemen Klinik, instruksi instalasi, dan detail tentang cara menggunakan dan berkontribusi pada proyek ini. Jika Anda memiliki pertanyaan tambahan atau memerlukan bantuan lebih lanjut, jangan ragu untuk menghubungi saya.
