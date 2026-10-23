@extends('layouts.app')

@section('title', $song->title)

@section('content')
<section class="detail-hero py-4 py-md-5">
    <div class="container">
        <a href="{{ route('songs.index') }}" class="back-link">← Kembali ke katalog</a>
        <div class="row align-items-center g-4 mt-2">
            <div class="col-md-5 col-lg-4">
                <img src="{{ asset('assets/images/' . $song->image) }}" class="detail-cover shadow-lg" alt="Sampul album {{ $song->album }}">
            </div>
            <div class="col-md-7 col-lg-8">
                <span class="genre-pill">{{ $song->genre }}</span>
                <p class="section-kicker mt-4 mb-2">DETAIL LAGU</p>
                <h1 class="detail-title">{{ $song->title }}</h1>
                <p class="detail-artist">{{ $song->artist }}</p>
                <p class="text-secondary mb-4">Lagu dari album <strong>{{ $song->album }}</strong>.</p>
                <div class="row g-3 detail-meta">
                    <div class="col-6 col-lg-4">
                        <div class="meta-box"><span>ALBUM</span><strong>{{ $song->album }}</strong></div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="meta-box"><span>DURASI</span><strong>{{ $song->duration }}</strong></div>
                    </div>
                    <div class="col-6 col-lg-4">
                        <div class="meta-box"><span>TAHUN RILIS</span><strong>{{ $song->release_year }}</strong></div>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="{{ route('songs.index') }}" class="btn btn-dark">Jelajahi lagu lainnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
