@extends('layout')
<!-- START FORM -->
@section('content') 

<form action='{{ url('ikan') }}' method='POST' enctype="multipart/form-data">
@csrf 
    <a href='{{ url('ikan') }}' class="btn text-white" style="background-color: #948989;text-decoration: none;
    opacity:1.0;
    box-shadow:none;
    border:none"><< kembali</a>
    

    <div class="form-group">
        <label for="name">Nama ikan</label>
        <input
          type="text"
          class="form-control rounded-pill text-white"
          name='name' value="{{ old('name') }}" id="name"
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
        <label for="name">Harga</label>
        <input
            type="number"
          class="form-control rounded-pill text-white"
          name='price' value="{{ old('price') }}" id="price"
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
        <label for="image_input">Pilih Gambar:</label>
        <input
          type="file"
          name="image[]" id="image" 
          multiple required class="form-control rounded-pill text-white"
          style=" background-color: #886c6c;"
        />
        <small id="imageHelp" class="form-text text-muted"
          >Pilih beberapa gambar dengan menekan tombol Ctrl/Cmd saat
          memilih.</small
        >
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
    </div>
</form>
<!-- AKHIR FORM -->
@endsection