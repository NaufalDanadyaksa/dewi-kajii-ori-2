@extends('layout')

@section('content')
<div class="container">
    <h2>Edit Berita</h2>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $berita->title }}">
        </div>
        <div class="mb-3">
            <label for="article" class="form-label">Artikel</label>
            <textarea class="form-control" id="article" name="article" rows="5">{{ $berita->article }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($berita->image)
            <img src="{{ asset($berita->image) }}" alt="Gambar Berita" class="mt-2" style="max-width: 300px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
