<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SongController extends Controller
{
    public function index(Request $request): View
    {
        // Logika Pencarian (Search)
        $search = trim((string) $request->query('q', ''));

        $songs = Song::query()
            ->when($search !== '', function ($query) use ($search) {
                $query->where(function ($subQuery) use ($search) {
                    $subQuery->where('title', 'like', "%{$search}%")
                        ->orWhere('artist', 'like', "%{$search}%")
                        ->orWhere('album', 'like', "%{$search}%")
                        ->orWhere('genre', 'like', "%{$search}%");
                });
            })
            ->orderByDesc('release_year')
            ->orderBy('title')
            
            // DIUBAH MENJADI 4: Menampilkan 4 lagu per halaman
            ->paginate(4) 
            
            // Mempertahankan query pencarian saat pindah halaman
            ->withQueryString(); 

        return view('songs.index', compact('songs', 'search'));
    }

    public function show(Song $song): View
    {
        return view('songs.show', compact('song'));
    }
}