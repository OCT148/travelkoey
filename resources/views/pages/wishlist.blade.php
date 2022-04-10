@extends('layouts.app')

@section('content')
    <h1>Wishlist Wisata</h1>
    <hr>
    @if(auth()->user()->locations->pluck('location_id')->count() > 0)
        @foreach($locations as $location)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <a href="/locations/{{$location->id}}"><img src="{{ url('storage/images/'.$location->image) }}" alt="image" style="width: 300px; height: 150px"></a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3><a href="/locations/{{$location->id}}">{{$location->title}}</a></h3>
                        <small>{{$location->description}}</small>
                    </div>
                    <a class ="category" href="/category/{{$location->category}}" style="text-decoration: none; color: white">{{ucfirst(trans($location->category))}}</a>
                </div>
            </div>
        @endforeach
    @else
        <p>Daftar Kosong</p>
    @endif
@endsection