@extends('layout')

@section('content')

<form action='{{ route('homestay.update', $homestay->id) }}' method='post' enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ url('homestay') }}' class="btn btn-secondary"><< Kembali</a>
        
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='name' value="{{ $homestay->name }}" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="description" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control">{{$homestay->description}}</textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="location" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='location' value="{{ $homestay->location }}" id="location">
            </div>
        </div>

        <!-- Tampilkan gambar-gambar atraksi yang ada -->
        <div class="mb-3 row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
                @foreach($homestay->images as $image)
                <img src="{{ asset('posts/'.$image->url) }}" class="rounded mb-3" style="width: 50%">
                <!-- Tambahkan checkbox untuk menghapus gambar -->
                <input type="checkbox" name="delete_image[]" value="{{ $image->id }}"> Hapus
            @endforeach
            </div>
        </div>

        <!-- Tambahkan form upload untuk gambar baru -->
        <div class="mb-3 row">
            <label for="new_image" class="col-sm-2 col-form-label">Upload Gambar Baru</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name='new_image[]' multiple>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            </div>
        </div>
        
    </div>
</form>
<!-- AKHIR FORM -->

@endsection
