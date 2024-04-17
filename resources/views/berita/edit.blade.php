@extends('layout')

@section('content')
<div class="container">
    <h2>Edit Berita</h2>
    <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Judul</label>
            <input type="text" class="form-control rounded-pill text-white" id="title" name="title" value="{{ $berita->title }}" style="background-color: #68687D; text-decoration: none; opacity: 1; box-shadow: none; border: none;" />
            <input type="text" class="form-control rounded-pill text-white" id="title" name="title" value="{{ $berita->title }}" style="background-color: #68687D; text-decoration: none; opacity: 1; box-shadow: none; border: none;" />
        </div>

        <div class="form-group">
            <label for="article">Artikel</label>
            <textarea type="text" class="form-control text-white p-3" id="article" name="article" rows="5" style="background-color: #68687D; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">
            <textarea type="text" class="form-control text-white p-3" id="article" name="article" rows="5" style="background-color: #68687D; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">
                {{ $berita->article }}</textarea>
        </div>

        <div class="form-group" style="margin-top: 20px;">
            <label for="image">Upload gambar baru:</label>
            <input
                type="file"
                name='image' 
                id="image"
                class="form-control rounded-pill text-white"
                style=" display: none;"
            />
            <button type="button" onclick="document.getElementById('image').click()" class="btn text-white rounded-pill" style="background-color: #68687D; margin-top:10px; margin-bottom:10px; " id="chooseImageButton">Pilih Gambar</button>
            <div id="preview"></div>
            @if ($berita->image)
                <img src="{{ asset($berita->image) }}" alt="Gambar Berita" class="mt-2" style="max-width: 300px;">
                <img src="{{ asset($berita->image) }}" alt="Gambar Berita" class="mt-2" style="max-width: 300px;">
            @endif
        </div>

        <div class="row justify-content-end">
            <div class="col-auto">
                <a href="{{ route('berita.index') }}"  class="btn text-white rounded-pill py-2 px-3" style="background-color: #95959a;text-decoration: none; opacity: 1.0; box-shadow: none; border: none">Batal</a>
                <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #68687D; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">Update</button>
                
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
            button.innerText = 'X';
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
