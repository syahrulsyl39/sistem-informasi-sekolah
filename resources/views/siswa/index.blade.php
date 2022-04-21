@extends('dashboard.index')

@section('main')
    <div class="container mt-xl-3">
        <div class="">
            @if (session('sukses'))
                <div class="alert alert-success " role="alert">
                    {{ session('sukses') }}
                </div>
            @endif



            <h1>Data Siswa</h1>
            <!-- Button trigger modal -->
            <button type=" button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal">
                Tambahkan Data Di Sini!
            </button>

            <form action="{{ route('dasboar-siswa') }}" class="form-inline my-2 my-lg-0 mb-4" method="get">
                <input class="form-control mr-sm-2 col-5" type="search" placeholder="Cari Data Siswa disini.." name="cari">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Cari Data Siswa</button>
            </form>

            <table class="table table-hover mt-2">
                <thead>
                    <tr>
                        <th>NAMA DEPAN</th>
                        <th>NAMA BELAKANG</th>
                        <th>JANIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_siswa as $datas)
                        <tr>
                            <td>{{ $datas->nama_depan }}</td>
                            <td>{{ $datas->nama_belakang }}</td>
                            <td>{{ $datas->jenis_kelamin }}</td>
                            <td>{{ $datas->agama }}</td>
                            <td>{{ $datas->alamat }}</td>
                            <td class="row ">
                                <a class="btn btn-primary" href="{{ route('detail-siswa', $datas->id) }}">Detail</a>
                                <a class="btn btn-warning mx-2 href="
                                    href=" {{ route('edit-siswa', $datas->id) }}">Edit</a>
                                <form action="{{ route('hapus-siswa', $datas->id) }}" method="post">
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('tambah-siswa') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Depan</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Masukkan Nama Depan Anda.." name="nama_depan">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Masukkan Nama Belakang Anda.."
                                    name="nama_belakang">
                            </div>

                            <div class=" form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                <select class="custom-select" id="inputGroupSelect01" name="jenis_kelamin">
                                    <option value="L">Laki Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Masukkan Agama Anda.." name="agama">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Masukkan Alamat Anda.." name="alamat">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
