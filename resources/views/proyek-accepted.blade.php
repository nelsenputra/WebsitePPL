<!DOCTYPE html>
<html>
<head>
    <title>Pemberitahuan IF3250 Proyek Perangkat Lunak</title>
</head>
<body>
    <p>Halo, {{ $proyek->nmPengaju }}</p>
    <p>Proyek Anda dengan Topik "{{ $proyek->topik }}" telah disetujui. Topik proyek Anda dapat dilihat pada daftar proyek PPL yang terdapat dalam website.</p>
    <p>Keterangan:{{ $proyek->ket }}</p>
    <p>Silakan memulai sprint planning dan selamat mengerjakan.</p>
    <p>Salam, Tim Dosen IF3250</p>
</body>
</html>