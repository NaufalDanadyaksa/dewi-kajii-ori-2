@extends('layout')
@section('content') 
<style>
    #contents1::placeholder{
        color: #ffffffa0 ; 
    }
</style>
<div class="container">
    <form action='{{ route('wisata.update', $wisata->id) }}' method='POST' enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <input
                type="text"
                class="form-control text-white"
                name='name' id="name"
                style="
            background-color:  #68687D;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
            margin-bottom:10px;
          "
                value="{{ $wisata->name }}" required>
        </div>
        <div class="form-group">
            <input type="number" class="form-control text-white"
                name="price" id="price" style="
                background-color:  #68687D;
                text-decoration: none;
                opacity: 1;
                box-shadow: none;
                border: none;
                border-radius: 6px;
                margin-bottom:10px;
              "
                value="{{ $wisata->price }}" required>
        </div>
        <div class="form-group">
            @foreach ($wisata->content as $content)
            <input type="text" class="form-control mt-2 text-white" id="contents1" name="contents[]" style="
            background-color:  #68687D;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
            margin-bottom:10px;
          "
          placeholder="nama paket" value="{{ $content->content }}">
            @endforeach
        </div>

        <div class="row row-cols-1 row-cols-md-3 mt-5">
                @foreach($wisata->images as $image)
            <div class="swiper-slide" style="height: 500px;">
                <img src="{{ asset('posts/paket_wisata/'.$image->url) }}" class="rounded mb-3 w-100 h-100" style="max-height: 300px;">
                <!-- Tambahkan checkbox untuk menghapus gambar -->
                <input type="checkbox" name="delete_image[]" value="{{ $image->id }}" class="form-check-input rounded-circle me-2">Hapus
            </div>
            @endforeach
             </div>
        <div class="form-group">
            <label for="image_input">Pilih Gambar Baru:</label>
            <input
                type="file"
                name='new_image[]' id="image" multiple
                class="form-control rounded-pill text-white"
                style="display:none;"
            />
            <button type="button" onclick="document.getElementById('image').click()" class="btn text-white rounded-pill" style="background-color: #68687D; margin-top:10px; margin-bottom:10px; " id="chooseImageButton">Pilih Gambar</button>
        <div id="preview"></div>
        <small id="imageHelp" class="form-text text-muted">Pilih beberapa gambar dengan menekan tombol Ctrl/Cmd saat memilih.</small>
        </div>

        <div class="row justify-content-end">
            <div class="col-auto">
               <a href="{{ route('wisata.index') }}" class="btn text-white rounded-pill py-2 px-3" style="background-color: #95959a;;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Kembali</a>
                <button
                    type="submit"
                    name="submit"
                    class="btn text-white rounded-pill py-2 px-3"
                    style="background-color: #948989;text-decoration: none;
                    opacity:1.0;
                    box-shadow:none;
                    border:none"
                >
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(e) {
        var files = e.target.files;
        var preview = document.getElementById('preview');
        var chooseImageButton = document.getElementById('chooseImageButton');
        
        preview.innerHTML = '';
        
        if (files.length > 0) {
            chooseImageButton.style.display = 'none';
        } else {
            chooseImageButton.style.display = 'block';
        }
        
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var reader = new FileReader();
            
            reader.onload = function(e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.maxWidth = '200px';
                img.style.marginRight = '10px';
                
                var button = document.createElement('button');
                button.innerText = 'x';
                button.type = 'button';
                button.classList.add('btn', 'btn-dark', 'rounded-circle', 'mb-2');
                button.style.cursor = 'pointer';
                button.style.border = 'none';
                
                button.addEventListener('click', function() {
                    preview.removeChild(div);
                    if (preview.children.length === 0) {
                        chooseImageButton.style.display = 'block';
                    }
                });
                
                var div = document.createElement('div');
                div.appendChild(img);
                div.appendChild(button);
                
                preview.appendChild(div);
            }
            
            reader.readAsDataURL(file);
        }
    });

</script>
@endsection



