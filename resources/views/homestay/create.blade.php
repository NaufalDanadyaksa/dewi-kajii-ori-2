@extends('layout')
<!-- START FORM -->
@section('content') 

<form action='{{ url('homestay') }}' method='POST' enctype="multipart/form-data">
@csrf 
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('homestay') }}' class="btn btn-secondary"><< kembali</a>
    
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            
            <input type="text" class="form-control" name='name' value="{{ old('name') }}" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="location" class="col-sm-2 col-form-label">Location</label>
        <div class="col-sm-10">
            
            <input type="text" class="form-control" name='location' value="{{ old('location') }}" id="location">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="image" class="col-sm-2 col-form-label">Images (Many):</label>
        <div class="col-sm-10">
            <input type="file" name="image[]" id="image" multiple required class="form-control" >
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