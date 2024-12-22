@extends('layouts.beranda.app')


@section('content')
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">UAS PEMOGRAMAN BERBASIS WEBSITE</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Praktikum Web Laravel Filament Studi Kasus Potensi Alam Daerah</h2>
                <a class="btn btn-primary" href="{{ route('profil.index') }}">Profil Kami</a>
            </div>
        </div>
    </div>
</header>
@endsection