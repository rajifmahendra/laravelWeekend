<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="pt-">
                    <h1 class="h1 mr-auto">Biodata {{ $karyawan->nama }}</h1>
                    <a href="{{ route('karyawans.edit', $karyawan->id) }}" class="btn btn-primary">Edit</a>

                    <form action="{{ route('karyawans.destroy', ['karyawan'=>$karyawan->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
                <hr>
                @if (session()->has('pesan'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('pesan') }}
                    </div>
                @endif
                <ul>
                    <li>Nik : {{ $karyawan->nik }}</li>
                    <li>Nama : {{ $karyawan->nama }}</li>
                    <li>Nomer Hp : {{ $karyawan->telepon->nomer_telepon }}</li>
                    <li>Jenis Kelamin : {{ $karyawan->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-laki' }}</li>
                    <li>Bagian : {{ $karyawan->bagian }}</li>
                    <li>Alamat : {{ $karyawan->alamat }}</li>
                </ul>
            </div>
        </div>
    </div>


<script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>