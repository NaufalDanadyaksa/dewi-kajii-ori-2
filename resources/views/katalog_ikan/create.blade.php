@extends('layout')
<!-- START FORM -->
@section('content') 

<form action='{{ url('ikan') }}' method='POST' enctype="multipart/form-data">
@csrf 
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('ikan') }}' class="btn btn-secondary"><< kembali</a>
    
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Name</label>
        <div class="col-sm-10">
            
            <input type="text" class="form-control" name='name' value="{{ old('name') }}" id="name">
        </div>
    </div>
   
    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-10">
            
            <input type="number" class="form-control" name='price' value="{{ old('price') }}" id="price">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="image" class="col-sm-2 col-form-label">Images (Many):</label>
        <div class="col-sm-10">
            <input type="file" name="image[]" id="image" multiple required class="form-control" >
        </div>
    </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>
<!-- AKHIR FORM -->
@endsection