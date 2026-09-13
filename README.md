# Aplikasi Perpustakaan (App Perpustakaan)

## Deskripsi
Aplikasi Perpustakaan adalah sebuah sistem manajemen perpustakaan berbasis web yang dibangun menggunakan Laravel 12. Aplikasi ini dibuat untuk memenuhi tugas mata kuliah Framework di Politeknik Elektronika Negeri Surabaya (PENS).

## Tujuan
Aplikasi ini bertujuan untuk mempermudah pengelolaan data perpustakaan, seperti data buku, anggota, dan transaksi peminjaman/pengembalian buku, sehingga proses administrasi perpustakaan dapat dilakukan secara lebih cepat, terstruktur, dan minim kesalahan dibandingkan pencatatan manual.

## Cara Menjalankan Project Secara Lokal

1. Clone repository ini
```bash
   git clone https://github.com/Kristt15/app-perpustakaan.git
   cd app-perpustakaan
```

2. Install dependency PHP
```bash
   composer install
```

3. Install dependency JavaScript
```bash
   npm install
```

4. Salin file environment dan generate application key
```bash
   cp .env.example .env
   php artisan key:generate
```

5. Jalankan migrasi database
```bash
   php artisan migrate
```

6. Jalankan development server
```bash
   composer run dev
```

7. Buka aplikasi di browser melalui `http://localhost:8000`

## Konsep MVC

**Model** adalah bagian yang bertanggung jawab mengelola data dan logika bisnis aplikasi, biasanya berhubungan langsung dengan database (misalnya query, relasi antar tabel, dan validasi data). **View** adalah bagian tampilan yang dilihat oleh pengguna, berisi HTML/Blade template yang menampilkan data kepada user tanpa memuat logika bisnis. **Controller** bertindak sebagai penghubung antara Model dan View, menerima request dari user, memproses data melalui Model, lalu mengirimkan hasilnya untuk ditampilkan melalui View.
