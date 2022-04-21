<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
        <a class="navbar-brand" href="#">SMA NEGERI MAKASSAR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Siswa
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('dasboar-siswa') }}">Data Siswa</a>
                        <a class="dropdown-item" href="{{ route('home-AB-siswa') }}">Absen Siswa</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Guru
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('index-guru') }}">Data Guru</a>
                        <a class="dropdown-item" href="{{ route('tampil-absen-guru') }}">Absen Guru</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index-mapel') }}">Mapel</a>
                </li>
            </ul>
            <span class="navbar-text">
                <a class="nav-link" href="{{ route('logout') }}"> <i
                        class="bi bi-box-arrow-right mr-1"></i>LOGOUT</a>

            </span>
        </div>
    </div>
</nav>
