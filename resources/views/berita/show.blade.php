@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $berita->title }}</h5>
                </div>
                <div class="card-body">
                    <img src="{{ asset($berita->image) }}" class="img-fluid mb-3" alt="{{ $berita->title }}">
                    <p class="card-text">{{ $berita->article }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
