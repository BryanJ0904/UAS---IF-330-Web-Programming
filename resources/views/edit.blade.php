<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}" />
    <title>Edit Data</title>
</head>
<body>
    @if(session('success'))
        <div class="alret" style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="color: red;">
            {{ session('error') }}
        </div>
    @endif
    @if($action === 'edit-produk')
    <form action="{{ url('/update-produk/'.$data->id) }}" method="post" enctype="multipart/form-data" class="DataForm">
    @elseif($action === 'edit-mesin')
    <form action="{{ url('/update-mesin/'.$data->id) }}" method="post" enctype="multipart/form-data" class="DataForm">
    @endif
        @csrf
        <label for="gambar">Gambar:</label>
        <input type="file" name="gambar" accept="image/*"  class="form-control">
        <br>
        <label for="part_no">Part No:</label>
        <input type="text" name="part_no" value="{{ $data->part_no }}"  class="form-control" required>
        <br>
        <label for="part_name">Part Name:</label>
        <input type="text" name="part_name" value="{{ $data->part_name }}"  class="form-control" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi"  class="form-control" required>{{ $data->deskripsi }}</textarea>
        <br>
        <br>
        <button type="submit" class="btn btn-primary btnsubmit">Update Data</button>
    </form>

    <a href="{{ url('/crud') }}" class="buttonbalik">Kembali ke Data</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>