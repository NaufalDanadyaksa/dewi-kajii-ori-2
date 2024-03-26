@extends('layout')

@section('content') 
<div class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <a href='{{ route('wisata.index') }}' class="btn btn-secondary"><< Kembali</a>
        
        <form action='{{ route('wisata.update', $wisata->id) }}' method='POST' enctype="multipart/form-data">
            @csrf 
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $wisata->name }}" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $wisata->price }}" required>
            </div>

            <div class="mb-3">
                <label for="contents" class="form-label">Isi Paket Wisata</label>
                @foreach ($wisata->content as $content)
                    <input type="text" class="form-control" id="contents" name="contents[]" value="{{ $content->content }}" required>
                @endforeach
                <!-- Tambahkan input tambahan sesuai kebutuhan -->
  
            </div>

            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    @foreach($wisata->images as $image)
                    <img src="{{ asset('posts/paket_wisata/'.$image->url) }}" class="rounded mb-3" style="width: 50%">
                    <!-- Tambahkan checkbox untuk menghapus gambar -->
                    <input type="checkbox" name="delete_image[]" value="{{ $image->id }}"> Hapus
                @endforeach
                </div>
            </div>
            <div class="mb-3 row">
                <label for="new_image" class="col-sm-2 col-form-label">Upload Gambar Baru</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name='new_image[]' multiple>
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
