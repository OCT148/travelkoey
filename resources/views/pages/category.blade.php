@extends('layouts.app')

@section('content')
    <h1 class="row justify-content-center" style="margin-top:5%">Kategori Tempat Wisata</h1>
        <div class="card-container" style="margin-top:5%">
            <div class="cards">

                <a href="/category/pendidikan" class="card">
                    <figure class="card__thumbnail">
                        <img src="{{asset('edukasi.jpeg')}}">
                        <span class="card__title">Wisata Pendidikan</span>
                    </figure>
                </a>

                <a href="/category/sejarah" class="card">
                    <figure class="card__thumbnail">
                        <img src="{{asset('sejarah.jpeg')}}">
                        <span class="card__title">Wisata Sejarah</span>
                    </figure>
                </a>

                <a href="/category/alam" class="card">
                    <figure class="card__thumbnail">
                        <img src="{{asset('alam.jpeg')}}">
                        <span class="card__title">Wisata Alam</span>
                    </figure>
                </a>

                <a href="/category/kerajinan" class="card">
                    <figure class="card__thumbnail">
                        <img src="{{asset('kerajinan.jpeg')}}">
                        <span class="card__title">Wisata Kerajinan</span>
                    </figure>
                </a>

                <a href="/category/religi" class="card">
                    <figure class="card__thumbnail">
                        <img src="{{asset('religi.jpeg')}}">
                        <span class="card__title">Wisata Religi</span>
                    </figure>
                </a>
            </div>
        </div>
@endsection