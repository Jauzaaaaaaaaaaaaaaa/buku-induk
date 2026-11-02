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
<body>
    <header class="kp-top at-top">
        <a class="kp-logo" href="{{ url('/') }}"><i>U</i><span>Universitas Duta Bangsa<small>Buku Induk Mahasiswa</small></span></a>
        <nav><a href="{{ url('/mahasiswa') }}">Data Mahasiswa</a><a href="{{ url('/insert') }}">Tambah</a></nav>
    </header>
    <main class="kp-main">
        <div class="kp-head">
            <div>
                <p class="kp-kicker" data-at>Buku induk</p>
                <h1 data-at-split>Data <em>mahasiswa</em></h1>
            </div>
            <div class="kp-stat" data-at><b>{{ $mahasiswas->count() }}</b><span>Mahasiswa terdaftar</span></div>
        </div>

        @if($message = Session::get('message'))
            <p class="kp-ok" role="status">{{ $message }}</p>
        @endif

        <div class="kp-tools" data-at>
            <input class="kp-input" type="search" id="kp-cari" placeholder="Cari NIM, nama, atau kelas" aria-label="Cari mahasiswa">
            <a class="kp-btn" href="{{ url('/insert') }}">Tambah data</a>
        </div>

        <div class="kp-table" data-at>
            <table>
                <thead>
                    <tr><th>NIM</th><th>Nama</th><th>Alamat</th><th>Kelas</th><th>No HP</th><th></th></tr>
                </thead>
                <tbody id="kp-rows">
                    @forelse($mahasiswas as $mahasiswa)
                    <tr>
                        <td class="kp-nim">{{ $mahasiswa->nim }}</td>
                        <td class="kp-nama">{{ $mahasiswa->nama }}</td>
                        <td>{{ $mahasiswa->alamat }}</td>
                        <td>{{ $mahasiswa->kelas }}</td>
                        <td>{{ $mahasiswa->hp }}</td>
                        <td class="kp-act">
                            <a href="{{ url('/mahasiswa/update/' . $mahasiswa->nim) }}">Ubah</a>
                            <a class="kp-del" href="{{ url('/mahasiswa/delete/' . $mahasiswa->nim) }}" onclick="return confirm('Yakin menghapus data mahasiswa ini?')">Hapus</a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="6" class="kp-empty">Belum ada data mahasiswa.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
    <script>
        document.getElementById('kp-cari').addEventListener('input', function () {
            var q = this.value.toLowerCase();
            document.querySelectorAll('#kp-rows tr').forEach(function (r) {
                r.style.display = r.textContent.toLowerCase().indexOf(q) > -1 ? '' : 'none';
            });
        });
    </script>
    <footer class="kp-foot"><span>Sistem Informasi Akademik</span><span>Universitas Duta Bangsa Surakarta</span></footer>
</body>
</html>
