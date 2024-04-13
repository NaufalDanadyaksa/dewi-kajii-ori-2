@extends('layout')

@section('content')
<style>
    .swiper {
    height: 100%;
    height: 100%;
}

.swiper-wrapper {
    display: flex;
    align-items: center;
    height: 100%;
    height: 100%;
}

.swiper-slide {
    height: 500px;
}

.swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (min-width: 768px) {
    .swiper-wrapper {
        padding-left: 100px;
    }
}
</style>

<form action='{{ route('atraksi.update', $atraksi->id) }}' method='post' enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    <div class="form-group">
        <input type="text" class="form-control text-white" name='name' value="{{ $atraksi->name }}" id="name" style="
            background-color:  #68687D;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
            margin-bottom:10px;
          "
        placeholder="Nama Atraksi"
 />
    </div>
    
    <div class="form-group">
        <textarea type="text" class="form-control text-white p-3" name="description" id="description" placeholder="Nama Atraksi"
          style="
            background-color:  #68687D;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
          "
        >{{ $atraksi->description }}</textarea>
    </div>

           

            <div class="row row-cols-1 row-cols-md-3 mt-5">
                @foreach($atraksi->images as $image)
            <div class="swiper-slide" style="height: 500px;">
                <img src="{{ asset('posts/atraksi/'.$image->url) }}" class="rounded mb-3 w-100 h-100" style="max-height: 300px;">
                <!-- Tambahkan checkbox untuk menghapus gambar -->
                <input type="checkbox" name="delete_image[]" value="{{ $image->id }}" class="form-check-input rounded-circle me-2">Hapus
            </div>
            @endforeach
             </div>

    <div class="form-group">
        <input
          type="file"
          name="new_image[]" id="image" 
          multiple class="form-control rounded-pill text-white"
          style=" display: none;"
        />
        <button type="button" onclick="document.getElementById('image').click()" class="btn text-white rounded-pill" style="background-color: #68687D; margin-bottom:10px; " id="chooseImageButton">Pilih Gambar</button>
        <div id="preview"></div>
        <small id="imageHelp" class="form-text text-muted">Pilih beberapa gambar dengan menekan tombol Ctrl/Cmd saat memilih.</small>
    </div>

    
    <div class="row justify-content-end">
        <div class="col-auto">
          <a href="{{ url('atraksi') }}" class="btn text-white rounded-pill py-2 px-3" style="background-color: #95959a;;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Kembali</a>
            <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color:  #68687D; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">Submit</button>
        </div>
    </div>
</form>
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
