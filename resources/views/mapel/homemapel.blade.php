@extends('dashboard.index')

@section('main')
    <div class="container mt-xl-3">
        <h1 class="py-4">Data Mapel</h1>

        <a class="btn btn-primary my-3" href="{{ route('tambah-mapel') }}">
            Tambahkan Data!
        </a>

        <form action="{{ route('index-mapel') }}" class="form-inline my-2 my-lg-0 mb-4" method="get">
            <input class="form-control mr-sm-2 col-5" type="search" placeholder="Cari Data Mapel disini.." name="cari">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari Data Mapel</button>
        </form>

        <table class="table mt-2">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">No</th>
                    <th scope="col">Kode Mata Pelajaran</th>
                    <th scope="col">Nama Mata Pelajaran</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_mapel as $key => $mapel)
                    <tr>

                        <td scope="row">{{ $key + 1 }}</td>
                        <td scope="row">{{ $mapel->kode_mapel }}</td>
                        <td scope="row">{{ $mapel->nama_mapel }}</td>
                        <td scope="row">{{ $mapel->kelas }}</td>
                        <td scope="row" class="row">
                            <a class="btn btn-warning mr-3" href="{{ route('edit-mapel', $mapel->id) }}">
                                Edit
                            </a>

                            <form action="{{ route('hapus-mapel', $mapel->id) }}" method="post">
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
