<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="{{ asset('produk.css') }}" />
</head>
<body class="body">
    @include('tampilan.main')
    <div class="pproduk">
        @foreach($produk as $produk)
            <div class="produk-item">
                <a href="{{ route('detail.produk', ['id' => $produk->id]) }}">
                    <img src="{{ asset('storage/'.$produk->gambar) }}" alt="Product Image">
                </a>
                <p>Nama Produk : {{ $produk->part_name }}</p>
                <p>Deskripsi : {{ $produk->deskripsi }}</p>
            </div>
        @endforeach
    </div>
    @include('tampilan.footer')
</body>
</html>