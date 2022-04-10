
@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 5%;">
        <img style="width: 1120px; height: 360px" src="{{ url('storage/images/'.$location->image) }}" >
        <br><br>
        <a class ="category" href="/category/{{$location->category}}" style="text-decoration: none; color: white">{{ucfirst(trans($location->category))}}</a>
        <h1>{{$location->title}}</h1>
        <div>
            <p>{!!$location->body!!}</p>
        </div>
        <div style="text-align: right">
            @if (auth()->user()->locations->contains($location->id))
                <a href="/wishlists/{{$location->id}}/remove" class="btn btn-primary">Hapus dari Wishlist</a>
            @else
                <a href="/wishlists/{{$location->id}}" class="btn btn-primary">Tambah ke Wishlist</a>
            @endif
        </div>
    </div>
@endsection