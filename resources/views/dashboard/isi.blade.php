@extends('dashboard.index')

@section('main')
    <div class="container">
        <div class="card mx-auto">
            <img class="card-img-top" src="{{ asset('img/1.png') }}" alt="Card image cap" height="350px">

            <div class="card-body">
                <h2 class="card-title">SELAMAT DATANG <span>{{ auth()->user()->name }}</span> DI HALAMAN ADMIN</h2>
                <p class="card-text ">Pelopor SMK bidang Teknologi Informasi dan Komunikasi di Indonesia and BEST
                    ONLINE EDUCATION SERVICE IN THE WORLD</p>
            </div>


        </div>
    </div>
@endsection
