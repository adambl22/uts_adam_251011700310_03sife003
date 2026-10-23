<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        $songs = [
            [
                'title' => 'Senja di Kota', 
                'artist' => 'Langit Sore', 
                'album' => 'Cerita Pulang', 
                'genre' => 'Indie Pop', 
                'duration' => '03:42', 
                'image' => 'senja-di-kota.jpg', 
                'release_year' => 2025],

            [
                'title' => 'Ruang Kecil', 
                'artist' => 'Ruang Nada', 
                'album' => 'Di Antara Kita', 
                'genre' => 'Alternative', 
                'duration' => '04:08', 
                'image' => 'ruang-kecil.jpg', 
                'release_year' => 2024],

            [
                'title' => 'Berjalan Lagi', 
                'artist' => 'Pijar Pagi', 
                'album' => 'Langkah Pertama', 
                'genre' => 'Pop Rock', 
                'duration' => '03:55', 
                'image' => 'berjalan-lagi.jpg', 
                'release_year' => 2025],

            [
                'title' => 'Hujan Bulan Juni', 
                'artist' => 'Kamar Akustik', 
                'album' => 'Akustik Malam', 
                'genre' => 'Acoustic', 
                'duration' => '03:31', 
                'image' => 'hujan-bulan-juni.jpg', 
                'release_year' => 2023],

            [
                'title' => 'Jendela', 
                'artist' => 'Arunika', 
                'album' => 'Warna Hari', 
                'genre' => 'Indie Folk', 
                'duration' => '04:12', 
                'image' => 'jendela.jpg', 
                'release_year' => 2024],

            [
                'title' => 'Kembali ke Rumah', 
                'artist' => 'Suar Senyap', 
                'album' => 'Peta Ingatan', 
                'genre' => 'Indie Pop', 
                'duration' => '03:47', 
                'image' => 'kembali-ke-rumah.jpg', 
                'release_year' => 2022],

            [
                'title' => 'Kota yang Sama', 
                'artist' => 'Tepi Jalan', 
                'album' => 'Lampu Kota', 
                'genre' => 'Alternative Rock', 
                'duration' => '04:01', 
                'image' => 'kota-yang-sama.jpg', 
                'release_year' => 2025],
            [
                'title' => 'Langkah Pelan', 
                'artist' => 'Nara Senja', 
                'album' => 'Pelan-Pelan', 
                'genre' => 'R&B', 
                'duration' => '03:26', 
                'image' => 'langkah-pelan.jpg', 
                'release_year' => 2023],
        ];

        foreach ($songs as $song) {
            Song::updateOrCreate(
                ['title' => $song['title'], 'artist' => $song['artist']],
                $song
            );
        }
    }
}
