@extends('layouts.app')

@section('content')
<div class="row justify-content-center" style="margin-top:5%">
    <div class="col-md-8 row" style="text-align: center">
        <div>
            <h1>Profile</h1>
        <div><br>

        <div class="row mb-3" >
            <label class="col-md-6 col-form-label text-md-end">Name :</label>
            <div class="col-md-6">
                <p class="col-form-label text-md-start">{{ Auth::user()->name }}</p>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-md-6 col-form-label text-md-end">Email :</label>
            <div class="col-md-6">
                <p class="col-form-label text-md-start">{{ Auth::user()->email }}</p>
            </div>
        </div>
    </div>    
</div>
@endsection