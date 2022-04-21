@extends('dashboard.index')

@section('main')
    <div class="container mt-5">

        <h2>Absen Guru</h2>

        <a class="btn btn-primary my-4" href="{{ route('tambah-absen') }}">
            Absen Guru Disini!
        </a>

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
                @foreach ($data_absen as $absen)
                    <tr>
                        <th>{{ $absen->jam_masuk }}</th>
                        <td>{{ $absen->jam_keluar }}</td>
                        <td>{{ $absen->materi }}</td>
                        <td>{{ $absen->tugas }}</td>
                        <td>{{ $absen->jumlahmhs_hadir }}</td>
                        <td>{{ $absen->jumlahmhs_tdkhadir }}</td>
                        <td>
                            <img width="80px" height="60px" src="{{ asset('storage/' . $absen->gambar) }}" alt="">
                        </td>
                        <td class="row border-0 px-4">
                            <a class="btn btn-warning" href="{{ route('edit-absen', $absen->id) }}">
                                Edit
                            </a>

                            <form action="{{ route('delete-absen', $absen->id) }}" method="post" class="ml-3">
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
