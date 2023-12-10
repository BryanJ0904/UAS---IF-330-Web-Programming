@include('tampilan.main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}" />
</head>
<body>
    <div class="kontak-container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <center><h3>KIRIM PESAN KE KAMI</h3></center>

        <form action="{{ route('kontak.send') }}" method="post" class="kontak-form">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="subjek">Subjek:</label>
                <input type="text" name="subjek" required>
            </div>

            <div class="form-group">
                <label for="pesan">Pesan:</label>
                <textarea name="pesan" required></textarea>
            </div>

            <button type="submit">Kirim Pesan</button>
        </form>
    </div>

    @include('tampilan.footer')
</body>
</html>
