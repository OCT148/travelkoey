@extends('layouts.app')

<style>
    .card-container {
        display: flex;
        justify-content: center;
    }

    .cards {
        display: grid;
        width: 1200px;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        grid-gap: 15px;
    }

    .card {
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: lightgray;
        height: 200px;
    }

    .card:hover{
        cursor: pointer;
        box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.420);
    }

    .card__title {
          align-self: flex-end; 
          padding: 0.5rem;
          color: rgba(255,255,255,.90); 
          font-size: 2rem;
          line-height: 1;
          font-weight: 600; 
        
    }

    .card__thumbnail {
        position: relative;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        
        width: 100%;
        height: 100%;
        
    }

    .card__thumbnail > img {
        height: 100%; 
    }  

    .card__thumbnail > .card__title {
        position: absolute;
        left: 0;
        bottom: 0;
    }
</style>

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