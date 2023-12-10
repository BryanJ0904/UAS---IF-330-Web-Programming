<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="{{ asset('detail.css') }}" />
</head>
<body>
    @include('tampilan.main')
    <div class="detail-produk">
        <h1>Detail Produk</h1>
        <img src="{{ asset('storage/'.$produk->gambar) }}" alt="Product Image">
        <p>Part NO : {{ $produk->part_no }}</p>
        <p>NAMA PRODUK : {{ $produk->part_name }}</p>
        <p>Deskripsi : {{ $produk->deskripsi }}</p>
    </div>
    @include('tampilan.footer')
</body>
</html>
