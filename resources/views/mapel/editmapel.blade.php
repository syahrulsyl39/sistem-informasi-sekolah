<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Mapel</title>
</head>

<body>
    <div class="container col-7 my-5">
        <h2 class="mb-4">Edit Mapel</h2>
        <form method="POST" action="{{ route('update-mapel', $mapel->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="kode_mapel">Kode Mapel</label>
                <input type="text" class="form-control" id="kode_mapel" placeholder="Enter kode mapel"
                    name="kode_mapel" value="{{ $mapel->kode_mapel }}">
            </div>
            <div class="form-group">
                <label for="nama_mapel">Nama Mapel</label>
                <input type="text" class="form-control" id="nama_mapel" placeholder="Enter nama mapel"
                    name="nama_mapel" value="{{ $mapel->nama_mapel }}">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas Mapel</label>
                <input type="text" class="form-control" id="kelas" placeholder="Enter kelas mapel" name="kelas"
                    value="{{ $mapel->kelas }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
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
