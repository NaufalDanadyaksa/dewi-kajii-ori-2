@extends('layout')

@section('content') 
<div class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ route('wisata.index') }}' class="btn btn-secondary"><< Kembali</a>
        
        <form action='{{ route('wisata.store') }}' method='POST' enctype="multipart/form-data">
            @csrf 
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="contents" class="form-label">Isi Paket Wisata</label>
                <input type="text" class="form-control" id="contents1" name="contents[]" required>
                <input type="text" class="form-control" id="contents2" name="contents[]" required>
                <input type="text" class="form-control" id="contents3" name="contents[]">
                <input type="text" class="form-control" id="contents4" name="contents[]">
                <input type="text" class="form-control" id="contents5" name="contents[]">
               
            </div>

            <div class="mb-3">
                <label for="images" class="form-label">Image</label>
                <input type="file" class="form-control" id="images" name="images[]" multiple required>
                
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
