@extends('layout')

@section('content') 
<div class="container">
        <a href='{{ route('wisata.index') }}' class="btn text-white" style="background-color: #948989;text-decoration: none;
        opacity:1.0;
        box-shadow:none;
        border:none"><< kembali</a>

        <form action='{{ route('wisata.store') }}' method='POST' enctype="multipart/form-data">
            @csrf 
            <div class="form-group">
                <label for="name">Nama Paket</label>
                <input
                  type="text"
                  class="form-control rounded-pill text-white"
                  name='name' id="name"
                  style="
                    background-color: #886c6c;
                    text-decoration: none;
                    opacity: 1;
                    box-shadow: none;
                    border: none;"
                    required>
            </div>

            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control rounded-pill text-white"
                name="price" id="price" style="background-color:
                #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
                border:none" required>
            </div>

            <div class="form-group">
                <label for="contents" class="form-label">Isi Paket Wisata</label>

                <input type="text" class="form-control mt-2 rounded-pill text-white" id="contents1" name="contents[]" style="background-color:
        #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
        border:none" required>
                <input type="text" class="form-control mt-2 rounded-pill text-white" id="contents2" name="contents[]" style="background-color:
        #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
        border:none" required>
                <input type="text" class="form-control mt-2 rounded-pill text-white" id="contents3" name="contents[]" style="background-color:
        #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
        border:none">
                <input type="text" class="form-control mt-2 rounded-pill text-white" id="contents4" name="contents[]" style="background-color:
        #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
        border:none">
                <input type="text" class="form-control mt-2 rounded-pill text-white" id="contents5" name="contents[]" style="background-color:
        #886c6c;text-decoration: none; opacity:1.0; box-shadow:none;
        border:none">
            </div>

            <div class="form-group">
                <label for="image_input">Pilih Gambar:</label>
                <input
                  type="file"
                  name="images[]" id="images" 
                  multiple required 
                  class="form-control rounded-pill text-white"
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
        </form>
    </div>
</div>
@endsection
