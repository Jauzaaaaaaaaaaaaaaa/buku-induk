<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa UDB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;700&family=Spectral:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('atelier/atelier.css') }}">
    <link rel="stylesheet" href="{{ asset('atelier/theme.css') }}">
    <script src="{{ asset('atelier/theme.js') }}"></script>
    <script src="{{ asset('atelier/atelier.js') }}"></script>
</head>
<body class="kp-home">
    <main class="kp-hero">
        <div class="kp-crest" data-at aria-hidden="true"><svg viewBox="0 0 120 140"><path d="M60 6L112 24V74C112 104 88 124 60 134C32 124 8 104 8 74V24Z"/><path d="M60 18L100 32V74C100 97 82 113 60 122C38 113 20 97 20 74V32Z"/><text x="60" y="88">U</text></svg></div>
        <p class="kp-kicker" data-at>Sistem Informasi Akademik</p>
        <h1 data-at-split>Selamat <em>datang</em></h1>
        <p class="kp-lead" data-at>Silakan masuk ke data mahasiswa Universitas Duta Bangsa.</p>
        <a class="kp-btn" href="{{ url('/mahasiswa') }}" data-at>Buka buku induk</a>
    </main>
</body>
</html>
