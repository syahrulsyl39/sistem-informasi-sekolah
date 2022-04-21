<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container my-5 col-6">
        <h2>Edit Guru</h2>
        <form method="POST" action="{{ route('update-guru', $guru->id) }}" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="form-group">
                <label for="kode">Kode Guru</label>
                <input type="text" class="form-control" id="kode" aria-describedby="emailHelp" placeholder="Enter Kode"
                    name="kode_guru" value="{{ $guru->kode_guru }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama Guru</label>
                <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Enter nama"
                    name="nama_guru" value="{{ $guru->nama_guru }}">
            </div>

            <div class=" form-group">
                <label for="exampleInputEmail1">Jenis Kelamin</label>
                <select class="custom-select" id="inputGroupSelect01" name="gender">
                    <option @if ($guru->gender == 'laki-laki') selected @endif value="laki-laki">Laki Laki</option>
                    <option @if ($guru->gender == 'perempuan') selected @endif value="perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="tanggal">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal" aria-describedby="emailHelp"
                    placeholder="Enter nama" name="tanggal_lahir" value="{{ $guru->tanggal_lahir }}">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp"
                    placeholder="Enter nama" name="alamat" value="{{ $guru->alamat }}">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" value="{{ $guru->gambar }}">
                @if ($guru->gambar)
                    <img class="mt-3" width="80px" height="60px"
                        src="{{ asset('storage/' . $guru->gambar) }}" alt="">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
