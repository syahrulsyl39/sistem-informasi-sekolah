@extends('dashboard.index')

@section('main')
    <div class="container mt-xl-3">
        <h1>Data Guru</h1>

        <a class="btn btn-primary my-4" href="{{ route('tambah-guru') }}">
            Tambahkan Guru Disini!
        </a>

        <form action="{{ route('index-guru') }}" class="form-inline my-2 my-lg-0 mb-3" method="get">
            <input class="form-control mr-sm-2 col-5" type="search" placeholder="Cari Data Guru disini.." name="cari">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari Data Guru</button>
        </form>

        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th>KODE GURU</th>
                    <th>NAMA GURU</th>
                    <th>JANIS KELAMIN</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ALAMAT</th>
                    <th>GAMBAR</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_guru as $datag)
                    <tr>
                        <td>{{ $datag->kode_guru }}</td>
                        <td>{{ $datag->nama_guru }}</td>
                        <td>{{ $datag->gender }}</td>
                        <td>{{ $datag->tanggal_lahir }}</td>
                        <td>{{ $datag->alamat }}</td>
                        <td>
                            <img width="80px" height="60px" src="{{ asset('storage/' . $datag->gambar) }}" alt="">
                        </td>
                        <td class="row ">
                            <a class="btn btn-warning" href="{{ route('edit-guru', $datag->id) }}">Edit</a>
                            <form action="{{ route('delete-guru', $datag->id) }}" method="post" class="ml-3">
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
