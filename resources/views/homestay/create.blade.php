@extends('layout')
<!-- START FORM -->
@section('content') 

<form action='{{ url('homestay') }}' method='POST' enctype="multipart/form-data">
@csrf 
<a href='{{ url('homestay') }}' class="btn text-white" style="background-color: #948989;text-decoration: none;
opacity:1.0;
box-shadow:none;
border:none"><< kembali</a>

    <div class="form-group">
        <label for="text_input1">Nama Homestay</label>
        <input
          type="text"
          class="form-control rounded-pill text-white"
          name='name' value="{{ old('name') }}" id="name"
          style="
            background-color: #886c6c;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;"
        />
    </div>

    <div class="form-group">
        <label for="text_input2">Deskripsi</label>
        <textarea type="text" class="form-control rounded-pill text-white p-3"
        name="description" id="description" style="background-color:
        #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
        border:none">{{ old('description') }}</textarea>
    </div>

    <div class="form-group">
        <label for="text_input1">Lokasi</label>
        <input
          type="text"
          class="form-control rounded-pill text-white"
          name='location' value="{{ old('location') }}" id="location"
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
</div>
</form>
<!-- AKHIR FORM -->
@endsection