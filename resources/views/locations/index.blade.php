@extends('layouts.app')

@section('content')
    <h1>Daftar Tempat Wisata</h1>
    <a href="/locations/create" class="btn btn-success" style="margin: 10px 0px">Masukan Tempat Wisata</a>
    @if(count($locations) > 0)
        <table class="table table-bordered table-striped">
            <tr>
                <th>ID</th>
                <th>Nama Tempat</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            @foreach($locations as $location)
                <tr>
                    <td class="col-md-1">{{$location->id}}</td>
                    <td class="col-md-3"><a href="/locations/{{$location->id}}">{{$location->title}}</a></td>
                    <td class="col-md-1"><a class ="category" href="/category/{{$location->category}}" style="text-decoration: none; color: white">{{ucfirst(trans($location->category))}}</a></td>
                    <td class="row col-md-1">
                        <div class="col-md-6">
                            <a href="locations/{{$location->id}}/edit" class="btn btn-warning">Edit</a>
                        </div>
                        <div>
                            <form action="{{route('locations.destroy', $location->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </th>
                </tr>
            @endforeach
    @else
        <p>Daftar Kosong</p>
    @endif
@endsection