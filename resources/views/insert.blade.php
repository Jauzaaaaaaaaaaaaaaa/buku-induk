<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah data | UDB</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;700&family=Spectral:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('atelier/atelier.css') }}">
    <link rel="stylesheet" href="{{ asset('atelier/theme.css') }}">
    <script src="{{ asset('atelier/theme.js') }}"></script>
    <script src="{{ asset('atelier/atelier.js') }}"></script>
</head>
<body>
    <header class="kp-top at-top">
        <a class="kp-logo" href="{{ url('/') }}"><i>U</i><span>Universitas Duta Bangsa<small>Buku Induk Mahasiswa</small></span></a>
        <nav><a href="{{ url('/mahasiswa') }}">Data Mahasiswa</a><a href="{{ url('/insert') }}">Tambah</a></nav>
    </header>
    <main class="kp-main kp-narrow">
        <p class="kp-kicker" data-at>Formulir pendaftaran</p>
        <h1 data-at-split>Tambah <em>data</em></h1>
        <form method="POST" class="kp-form" data-at>
            @csrf
            <div class="kp-field"><label for="nim">NIM</label><input class="kp-input" type="text" name="nim" id="nim" required></div>
            <div class="kp-field"><label for="nama">Nama Lengkap</label><input class="kp-input" type="text" name="nama" id="nama" required></div>
            <div class="kp-field"><label for="alamat">Alamat</label><input class="kp-input" type="text" name="alamat" id="alamat" required></div>
            <div class="kp-field"><label for="kelas">Kelas</label><input class="kp-input" type="text" name="kelas" id="kelas" required></div>
            <div class="kp-field"><label for="hp">No HP</label><input class="kp-input" type="text" name="hp" id="hp" required></div>
            <div class="kp-row"><button type="submit" class="kp-btn">Simpan</button><a class="kp-link" href="{{ url('/mahasiswa') }}">Kembali</a></div>
        </form>
    </main>
    <footer class="kp-foot"><span>Sistem Informasi Akademik</span><span>Universitas Duta Bangsa Surakarta</span></footer>
</body>
</html>
