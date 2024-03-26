@extends('layout')
<!-- START FORM -->
@section('content') 

<form action='{{ url('berita') }}' method='POST' enctype="multipart/form-data">
@csrf 
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('berita') }}' class="btn btn-secondary"><< kembali</a>
    
    <div class="mb-3 row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            
            <input type="text" class="form-control" name='title' value="{{ old('title') }}" id="title">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="article" class="col-sm-2 col-form-label">Article</label>
        <div class="col-sm-10">
            <textarea name="article" id="article" class="form-control">{{ old('article') }}</textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="image" class="col-sm-2 col-form-label">Images:</label>
        <div class="col-sm-10">
            <input type="file" name="image" id="image"  required class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection