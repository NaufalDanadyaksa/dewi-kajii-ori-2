@extends('layout')

@section('content')
<div class="container">
    <h2>sejarah</h2>
    <form action="{{ route('sejarah.update', $sejarah->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
       
        <div class="mb-3">
            <label for="article" class="form-label">Artikel</label>
            <textarea class="form-control" id="article" name="article" rows="5">{{ $sejarah->article }}</textarea>
        </div>
       
        <button type="submit" class="btn btn-primary">Update</button>
      
    </form>
</div>
@endsection
