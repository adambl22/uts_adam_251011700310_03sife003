@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<div class="container py-5">
    <h1>Selamat datang di NadaLokal</h1>
    <p>Jelajahi katalog musik lokal.</p>
    <a class="btn btn-primary" href="{{ route('songs.index') }}">Buka katalog lagu</a>
</div>
@endsection
