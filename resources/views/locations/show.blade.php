
@extends('layouts.app')

@section('content')
    <div style="margin-bottom: 5%;">
        <img style="width: 1120px; height: 360px" src="{{asset('placeholder.jpeg')}}" >
        <br><br>
        <a class ="category" href="/category/{{$location->category}}" style="text-decoration: none; color: white">{{ucfirst(trans($location->category))}}</a>
        <h1>{{$location->title}}</h1>
        <div>
            <p>{!!$location->body!!}</p>
        </div>
        <div class="row">
            <div class="col-md-1 col-sm-1">
                <a href="{{$location->id}}/edit" class="btn btn-warning">Edit</a>
            </div>
            <div class="col-md-1 col-sm-1">
                <form action="{{route('locations.destroy', $location->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection