<!DOCTYPE html>
<html>
<head>
    <title>Pemberitahuan IF3250 Proyek Perangkat Lunak</title>
</head>
<body>
    <p>Halo, {{ $proyek->nmPengaju }}</p>
    <p>Proyek Anda dengan Topik "{{ $proyek->topik }}" telah ditolak dengan alasan {{ $proyek->ket }}.</p>
    <p>Silakan mengajukan kembali topik proyek lain yang sesuai. Terima kasih.</p>
    <p>Salam, Tim Dosen IF3250</p>
</body>
</html>
