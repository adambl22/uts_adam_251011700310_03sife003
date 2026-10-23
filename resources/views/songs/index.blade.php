@extends('layouts.app')

@section('title', 'Jelajahi Musik')

@section('content')
<section class="hero-section">
    <div class="container py-5 py-lg-6">
        <div class="row align-items-center g-4">
            <div class="col-lg-7">
                <span class="eyebrow"><span class="eyebrow-dot"></span>RUANG MUSIK INDONESIA</span>
                <h1 class="hero-title mt-3">Suara lokal,<br><span>cerita yang dekat.</span></h1>
                <p class="hero-copy mt-3 mb-4">Jelajahi karya musisi lokal, temukan album baru, dan dukung warna musik Indonesia.</p>
                <a href="#katalog" class="btn btn-accent btn-lg">Jelajahi katalog <span aria-hidden="true">↓</span></a>
            </div>
            <div class="col-lg-5 d-none d-md-block">
                <div class="hero-art">
                    <div class="hero-disc"></div>
                    <div class="hero-note note-one">♫</div>
                    <div class="hero-note note-two">♪</div>
                    <div class="hero-caption">MUSIK DARI<br>SEKITAR KITA</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5" id="katalog">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
        <div>
            <span class="section-kicker">KURASI PILIHAN</span>
            <h2 class="section-title mb-1">Jelajahi lagu</h2>
            <p class="text-secondary mb-0">Temukan lagu berdasarkan judul, artis, album, atau genre.</p>
        </div>
        <form action="{{ route('songs.index') }}" method="GET" class="search-form d-flex gap-2" role="search">
            <label for="song-search" class="visually-hidden">Cari lagu</label>
            <input id="song-search" type="search" name="q" value="{{ $search }}" class="form-control" placeholder="Cari lagu atau artis...">
            <button class="btn btn-dark px-3" type="submit">Cari</button>
            @if($search !== '')
                <a href="{{ route('songs.index') }}" class="btn btn-outline-secondary">Reset</a>
            @endif
        </form>
    </div>

    @if($search !== '')
        <p class="small text-secondary mb-3">Hasil pencarian untuk: <strong>{{ $search }}</strong></p>
    @endif

    <!-- Grid menampilkan 4 Card (karena Controller membatasi 4 data per halaman) -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        @forelse($songs as $song)
            <div class="col">
                <article class="card song-card h-100">
                    <a href="{{ route('songs.show', $song) }}" class="cover-link" aria-label="Lihat detail {{ $song->title }}">
                        <!-- PERHATIKAN BARIS INI: Sesuaikan dengan isi database Anda -->
                        <img src="{{ asset('assets/images/' . $song->image) }}" class="card-img-top album-cover" alt="Sampul album {{ $song->album }}">
                        <span class="cover-play" aria-hidden="true">▶</span>
                    </a>
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center gap-2 mb-2">
                            <span class="genre-pill">{{ $song->genre }}</span>
                            <span class="year-text">{{ $song->release_year }}</span>
                        </div>
                        <h3 class="song-title">{{ $song->title }}</h3>
                        <p class="song-artist mb-3">{{ $song->artist }}</p>
                        <div class="mt-auto d-flex justify-content-between align-items-center border-top pt-3">
                            <span class="small text-secondary">{{ $song->duration }}</span>
                            <a href="{{ route('songs.show', $song) }}" class="detail-link">Detail lagu <span aria-hidden="true">↗</span></a>
                        </div>
                    </div>
                </article>
            </div>
        @empty
            <div class="col-12">
                <div class="empty-state text-center py-5">
                    <div class="display-5 mb-2">♫</div>
                    <h3 class="h5">Lagu belum ditemukan</h3>
                    <p class="text-secondary">Coba kata kunci lain.</p>
                    <a href="{{ route('songs.index') }}" class="btn btn-outline-dark">Lihat semua lagu</a>
                </div>
            </div>
        @endforelse
    </div>

    <!-- Tombol Pagination (Pindah Halaman) -->
    @if($songs->hasPages())
        <div class="mt-5 d-flex justify-content-center">
            {{ $songs->links('pagination::bootstrap-5') }}
        </div>
    @endif
</section>

<section class="container pb-4">
    <div class="community-banner p-4 p-md-5">
        <div class="row align-items-center g-3">
            <div class="col-md-8">
                <span class="section-kicker text-white-50">DENGARKAN LEBIH DEKAT</span>
                <h2 class="h3 fw-bold mb-2">Setiap lagu punya cerita.</h2>
                <p class="mb-0 text-white-50">Kenali musisi, album, dan genre yang membuat musik lokal begitu beragam.</p>
            </div>
            <div class="col-md-4 text-md-end"><a href="#katalog" class="btn btn-light">Lihat katalog lagu</a></div>
        </div>
    </div>
</section>
@endsection