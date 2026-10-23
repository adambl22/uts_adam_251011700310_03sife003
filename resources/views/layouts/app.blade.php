<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal Musik Lokal - temukan lagu dan musisi lokal pilihan.">
    <title>@yield('title', 'Portal Musik Lokal') | SONGNATION</title>
    {{-- Bootstrap lokal sesuai ketentuan tugas:
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    Jika belum mengunduh Bootstrap lokal, gunakan CDN di bawah agar aplikasi langsung tampil. --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark site-navbar sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ route('songs.index') }}">
            <span class="brand-mark">♫</span> SONGNATION
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                <li class="nav-item"><a class="nav-link" href="{{ route('songs.index') }}">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('songs.index') }}#katalog">Katalog Lagu</a></li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="site-footer mt-5" id="tentang">
    <div class="container py-4 d-flex flex-column flex-md-row justify-content-between gap-2">
        <div>
            <div class="fw-bold text-white">SONGNATION</div>
            <div class="small">Ekspresikan Dirimu.</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
{{-- Jika Bootstrap sudah disimpan secara lokal, gunakan:
<script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
--}}
</body>
</html>
