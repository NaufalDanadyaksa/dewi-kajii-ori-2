@extends('layout')
<!-- START FORM -->
@section('content') 

<form action='{{ url('berita') }}' method='POST' enctype="multipart/form-data">
@csrf 
    <a href='{{ url('berita') }}' class="btn text-white" style="background-color: #948989;text-decoration: none;
    opacity:1.0;
    box-shadow:none;
    border:none"><< kembali</a>
    

    <div class="form-group">
        <label for="tittle">Judul</label>
        <input
          type="text"
          class="form-control rounded-pill text-white"
          name='title' value="{{ old('title') }}" id="title"
          style="
            background-color: #886c6c;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
          "
        />
      </div>



    <div class="form-group">
        <label for="text_input2">Artikel</label>
        <textarea type="text" class="form-control rounded-pill text-white p-3"
        name="article" id="article" style="background-color:
        #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
        border:none">{{ old('article') }}</textarea>
    </div>

    <div class="form-group">
        <label for="image_input">Pilih Gambar:</label>
        <input
          type="file"
          name="image" id="image"
          multiple required class="form-control rounded-pill text-white"
          style=" background-color: #886c6c;"
        />
    </div>

      <div class="row justify-content-end">
        <div class="col-auto">
          <button
            type="submit"
            name="submit"
            class="btn text-white rounded-pill py-2 px-3"
            style="background-color: #948989;text-decoration: none;
            opacity:1.0;
            box-shadow:none;
            border:none""
          >
            Submit
          </button>
        </div>
</form>
<!-- AKHIR FORM -->
@endsection