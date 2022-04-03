@extends('layouts.app')

@section('content')
    <h1 >Edit Tempat Wisata</h1>
    <form runat="server" action="{{route('locations.update', $location->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Cover</label>
            <input type="file" name="image" id="image">
            <img src="{{ url('storage/images/'.$location->image) }}" id="previewImage" style="width: 480px; height: 360px;border: 1px solid black"/>
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" id="title" name="title" class="form-control"  value="{{ old('title', $location->title) }}"/> 
        </div>
        <div class="form-group row">
            <label>Kategori</label>
            <div class="col">
                <input type="radio" id="category" name="category" value="alam" {{ $location->category == 'alam' ? 'checked' : ''}}>
                <label for="alam">Alam</label>
            </div>
            <div class="col">
                <input type="radio" id="category" name="category" value="kerajinan" {{ $location->category == 'kerajinan' ? 'checked' : ''}}>
                <label for="kerajinan">Kerajinan</label>
            </div>
            <div class="col">
                <input type="radio" id="category" name="category" value="pendidikan" {{ $location->category == 'pendidikan' ? 'checked' : ''}}>
                <label for="pendidikan">Pendidikan</label>
            </div>
            <div class="col">
                <input type="radio" id="category" name="category" value="religi" {{ $location->category == 'religi' ? 'checked' : ''}}>
                <label for="religi">Religi</label>
            </div>
            <div class="col">
                <input type="radio" id="category" name="category" value="sejarah"{{ $location->category == 'sejarah' ? 'checked' : ''}}>
                <label for="sejarah">Sejarah</label>
            </div>
        </div>
        <div class="form-group">
            <label>Deksripsi</label>
            <input type="text" id="description" name="description" class="form-control" value="{{ old('description', $location->description) }}"/> 
        </div>
        <div class="form-group">
            <label>Isi</label>
            <textarea type="text" id="body" name="body" rows="10" class="ckeditor form-control" >{{ old('body', $location->body) }}</textarea> 
        </div>
        <div style="text-align: right">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });

        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                previewImage.src = URL.createObjectURL(file)
            }
        }
    </script>
@endsection