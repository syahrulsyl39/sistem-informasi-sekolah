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

    <div class="container mt-4 col-8">
        <div class="card mx-auto">
            <img class="card-img-top" src="{{ asset('img/1.png') }}" alt="Card image cap" height="350px">

            <div class="card-body">
                <h3 class="heading uppercase">{{ $edit_siswa->nama_depan }}
                    <span>{{ $edit_siswa->nama_belakang }}</span>
                </h3>
                <ul class="list-unstyled list-justify">
                    <li>JENIS KELAMIN: <span class="font-bold">{{ $edit_siswa->jenis_kelamin }}</span></li>
                    <li>AGAMA : <span>{{ $edit_siswa->agama }}</span></li>
                    <li>ALAMAT : <span>{{ $edit_siswa->alamat }}</span></li>
                </ul>
                <a class="btn btn-primary" href="{{ route('dasboar-siswa') }}">Close</a>
            </div>

        </div>
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
