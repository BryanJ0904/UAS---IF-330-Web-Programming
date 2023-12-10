<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('crud.css') }}" />
    <title>CRUD Page</title>
</head>
<body>
@include('tampilan.main')
    <div class="crud">
        <form action="{{ url('/add-data') }}" method="post" enctype="multipart/form-data" class="DataForm">
            @csrf
            <label for="gambar">Gambar:</label>
            <input type="file" name="gambar" required accept="image/*" class="form-control">
            <label for="part_no">Part No:</label>
            <input type="text" name="part_no" required class="form-control">
            <label for="part_name">Part Name:</label>
            <input type="text" name="part_name" required class="form-control">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" required class="form-control"></textarea>
            <button type="submit" class="btn btn-primary btnsubmit">Tambah Data</button>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <table class="TableData">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Part No</th>
                    <th>Part Name</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                    <tr>
                        <td><img src="{{ asset('storage/'.$item->gambar) }}" alt="Product Image"></td>
                        <td>{{ $item->part_no }}</td>
                        <td>{{ $item->part_name }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <a href="{{ url('/edit-form/'.$item->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('/delete-data/'.$item->id) }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @include('tampilan.footer')
</body>
</html>
