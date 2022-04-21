<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Guru</title>
</head>

<body>
    <div class="container my-5 col-6">
        <h2>Absen Siswa</h2>
        <form method="POST" action="{{ route('data-absen-siswa') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Jam_masuk">Jam Masuk</label>
                <input type="datetime-local" class="form-control" id="jam_masuk" aria-describedby="emailHelp"
                    placeholder="Enter jam masuk" name="jam_masuk">
            </div>
            <div class="form-group">
                <label for="jam_keluar">Jam Keluar</label>
                <input type="datetime-local" class="form-control" id="jam_keluar" aria-describedby="emailHelp"
                    placeholder="Enter jam_keluar" name="jam_keluar">
            </div>

            <div class="form-group">
                <label for="materi">Materi</label>
                <input type="text" class="form-control" id="materi" aria-describedby="emailHelp"
                    placeholder="Enter materi" name="materi">
            </div>



            <div class=" form-group">
                <label for="tugas">Tugas</label>
                <select class="custom-select" id="tugas" name="tugas">
                    <option value="ada">Ada</option>
                    <option value="tidak ada">tidak ada</option>
                </select>
            </div>


            <div class="form-group">
                <label for="jumlahmhs_hadir">Jumlah Mahasiswa Hadir</label>
                <input type="text" class="form-control" id="jumlahmhs_hadir" aria-describedby="emailHelp"
                    placeholder="Enter Jumlah Mahasiswa Hadir" name="jumlahmhs_hadir">
            </div>
            <div class="form-group">
                <label for="jumlahmhs_tdkhadir">Jumlah Mahasiswa Tidak Hadir</label>
                <input type="text" class="form-control" id="jumlahmhs_tdkhadir" aria-describedby="emailHelp"
                    placeholder="Enter Jumlah Mahasiswa Tidak Hadir" name="jumlahmhs_tdkhadir">
            </div>

            <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="file" class="form-control" id="gambar" aria-describedby="emailHelp"
                    placeholder="Enter gambar" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary">Absen Data</button>
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
