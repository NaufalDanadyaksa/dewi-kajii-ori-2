@extends('layout')

@section('content')
<div class="container">
    <h2>Tambahkan Artikel Sejarah</h2>
    <form action="{{ route('sejarah.update', $sejarah->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
       
        <div class="mb-3">
            <textarea class="form-control text-black" id="article" name="article" rows="5" style="background-color: #d3d3d3;">{{ $sejarah->article }}</textarea>
        </div>
       
        <div class="row justify-content-end">
            <div class="col-auto">
              <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #68687D;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Update</button>
            </div>
        </div>
        
      
    </form>
</div>
@endsection
