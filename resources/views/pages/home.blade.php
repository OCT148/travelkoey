@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <div class="well">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <a href="/posts/show"><img src="{{asset('placeholder.jpeg')}}" alt="image" style="width: 300px; height: 150px"></a>
            </div>
            <div class="col-md-7 col-sm-7">
                <h3><a href="/posts/show"> Post #1 </a></h3>
                <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</small>
            </div>
            <a class ="category" href="#" style="text-decoration: none; color: white">
                Kategori
            </a>
            
        </div>
    </div>
@endsection