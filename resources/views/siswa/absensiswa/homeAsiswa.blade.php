@extends('dashboard.index')

@section('main')
    <div class="container mt-5">

        <h2>Absen Siswa</h2>

        <a class="btn btn-primary my-4" href="{{ route('tambah-ab-siswa') }}">
            Absen Siswa Disini!
        </a>

        <form action="{{ route('home-AB-siswa') }}" class="form-inline my-2 my-lg-0 mb-4" method="get">
            <input class="form-control mr-sm-2 col-5" type="search" placeholder="Cari Data Siswa disini.." name="cari">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari Data Absen Siswa</button>
        </form>

        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Jam Masuk</th>
                    <th scope="col">Jam Keluar</th>
                    <th scope="col">Materi</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">Siswa Hadir</th>
                    <th scope="col">Tidak Hadir</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_siswa as $siswa)
                    <tr>
                        <th>{{ $siswa->jam_masuk }}</th>
                        <td>{{ $siswa->jam_keluar }}</td>
                        <td>{{ $siswa->materi }}</td>
                        <td>{{ $siswa->tugas }}</td>
                        <td>{{ $siswa->jumlahmhs_hadir }}</td>
                        <td>{{ $siswa->jumlahmhs_tdkhadir }}</td>
                        <td>
                            <img width="80px" height="60px" src="{{ asset('storage/' . $siswa->gambar) }}" alt="">
                        </td>
                        <td class="row border-0 px-4">
                            <a class="btn btn-warning" href="{{ route('edit-absen-siswa', $siswa->id) }}">
                                Edit
                            </a>

                            <form action="{{ route('delete-ab-siswa', $siswa->id) }}" method="post"
                                class="ml-3">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
