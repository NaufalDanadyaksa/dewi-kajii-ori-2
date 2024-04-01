@extends('layout')

@section('content')
<div class="container">
    <h2>Edit Berita</h2>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Judul</label>
            <input type="text" class="form-control rounded-pill text-white" id="title" name="title" value="{{ $berita->title }}" style="background-color: #886c6c; text-decoration: none; opacity: 1; box-shadow: none; border: none;" />
        </div>

        <div class="form-group">
            <label for="article">Artikel</label>
            <textarea type="text" class="form-control text-white p-3" id="article" name="article" rows="5" style="background-color: #886c6c; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">
                {{ $berita->article }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Gambar:</label>
            <input type="file" class="form-control rounded-pill text-white" name='new_image' style="background-color: #886c6c;">
            @if ($berita->image)
            <img src="{{ asset($berita->image) }}" alt="Gambar Berita" class="mt-2" style="max-width: 300px;">
            @endif
        </div>

        <div class="row justify-content-end">
            <div class="col-auto">
                <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #948989; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">Update</button>
                <a href="{{ route('berita.index') }}"  class="btn text-white rounded-pill py-2 px-3" style="background-color: #3e3333; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">Batal</a>
            </div>
        </div>
        
    </form>
</div>
@endsection
