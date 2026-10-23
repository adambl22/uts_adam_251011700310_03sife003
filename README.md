# Portal Musik Lokal — Laravel

Source code fitur untuk tugas UTS Rekayasa Web: Portal Musik Lokal.

## Fitur
- Halaman katalog lagu dengan pencarian sederhana.
- Halaman detail lagu.
- Migration tabel `songs` dengan kolom sesuai soal: `id, title, artist, album, genre, duration, image, release_year`.
- Seeder berisi data dummy.
- Blade layout, Bootstrap, navbar, card, dan navigasi.
- Gambar album disimpan di `public/assets/images/`.

## Persyaratan
- PHP 8.3+
- Composer
- Laravel 13
- MySQL
- Node.js tidak wajib untuk versi sederhana ini

## 1. Buat project Laravel
```bash
composer create-project laravel/laravel:^13.0 UTS_NIM
cd UTS_NIM
```
Jika Laravel 13 belum tersedia pada Composer yang digunakan, gunakan versi Laravel yang disediakan dosen dan pastikan kompatibilitas PHP.

## 2. Salin file source
Ekstrak ZIP ini. Salin folder dan file di dalamnya ke root project Laravel yang baru dibuat, dengan mempertahankan struktur folder. File `routes/web.php` dan `resources/views/welcome.blade.php` akan diganti oleh versi dari paket ini.

## 3. Atur database
Buat database MySQL bernama `db_uts_nim`, lalu sesuaikan `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_uts_nim
DB_USERNAME=root
DB_PASSWORD=
```
Ganti `NIM` pada nama database dan folder proyek sesuai instruksi dosen.

## 4. Jalankan migration dan seeder
```bash
php artisan migrate --seed
```

## 5. Jalankan aplikasi
```bash
php artisan serve
```
Buka alamat yang ditampilkan Artisan, biasanya http://127.0.0.1:8000.

## Bootstrap lokal
Layout sudah memakai Bootstrap 5.3.3 dari CDN supaya tampilan langsung bekerja. Soal meminta file Bootstrap lokal di `public/Bootstrap`. Untuk memenuhi persyaratan lokal, unduh Bootstrap 5.3.x, lalu letakkan:
- `public/Bootstrap/css/bootstrap.min.css`
- `public/Bootstrap/js/bootstrap.bundle.min.js`

Setelah file tersedia, di `resources/views/layouts/app.blade.php` ubah komentar CDN menjadi tag asset lokal yang sudah disediakan dalam komentar pada file tersebut.

## Catatan
- Nama, artis, dan album dalam seeder adalah data contoh fiktif untuk demonstrasi, bukan klaim katalog rilisan resmi.
- Harga tidak diperlukan untuk tema Portal Musik Lokal; struktur tabel mengikuti soal.
- Sebelum dikumpulkan, ganti identitas pada dokumentasi, jalankan aplikasi, ambil screenshot aktual, dan unggah source code ke GitHub dengan nama `UTS_NAMA_NIM_KODEKELAS`.
