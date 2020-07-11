<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2>Tabel Data Karyawan</h2>
                    <a href="{{ route('gallery.create') }}" class="btn btn-primary">Tambah Karyawan</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>           
                        @foreach ($item as $tampil)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tampil->nama }}</td>
                            <td>{{ $tampil->alamat }}</td>
                            <td>
                                <img src="{{ Storage::url($tampil->image) }}" alt="gambar" style="width: 200px;">
                            </td>
                            <td>
                                <a href="{{ route('gallery.edit', $tampil->id) }}" class="btn btn-info">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>