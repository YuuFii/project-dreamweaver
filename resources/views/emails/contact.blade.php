<!DOCTYPE html>
<html>
<head>
    <title>Pesan dari Form Kontak</title>
</head>
<body>
    <h1>Pesan Kontak</h1>
    <p><strong>Nama:</strong> {{ $details['nama'] }}</p>
    <p><strong>Email:</strong> {{ $details['email'] }}</p>
    <p><strong>Isi:</strong></p>
    <p>{{ $details['isi'] }}</p>
</body>
</html>