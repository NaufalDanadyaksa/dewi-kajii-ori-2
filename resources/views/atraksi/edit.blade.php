@extends('layout')

@section('content')

<form action='{{ route('atraksi.update', $atraksi->id) }}' method='post' enctype="multipart/form-data">
    @csrf 
    @method('PUT')
    

    <h2>Atraksi</h2>
    <div class="form-group">
        <input type="text" class="form-control text-white" name='name' value="{{ $atraksi->name }}" id="name" style="
            background-color: #D4D4D4;
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
            background-color: #D4D4D4;
            text-decoration: none;
            opacity: 1;
            box-shadow: none;
            border: none;
            border-radius: 6px;
          "
        >{{ $atraksi->description }}</textarea>
    </div>

    <div class="swiper atraksi mt-5" style="height: 100%;">
        <div class="swiper-wrapper" style="display: flex; align-items: center;">
            @foreach($atraksi->images as $image)
            <div class="swiper-slide" style="height: 500px;">
                <img src="{{ asset('posts/atraksi/'.$image->url) }}" class="rounded mb-3 w-100 h-100" style="max-height: 300px;">
                <!-- Tambahkan checkbox untuk menghapus gambar -->
                <input type="checkbox" name="delete_image[]" value="{{ $image->id }}" class="form-check-input rounded-circle me-2">Hapus
            </div>
            @endforeach
        </div>
        <div class="swiper-button-next" style="right: 10px; color: black;"></div>
        <div class="swiper-button-prev" style="left: 10px; color: black;"></div>
        <div class="swiper-scrollbar" style="background-color: rgb(166, 138, 76);"></div>
    </div>

    <!-- Tambahkan form upload untuk gambar baru -->
    <div class="form-group">
        <div style="margin-bottom:30px;">
            <input type="file" class="form-control rounded-pill text-white" name='new_image[]' multiple style="background-color: #886c6c;">
        </div>
    </div>
    
    <div class="row justify-content-end">
        <div class="col-auto">
          <a href="{{ url('atraksi') }}" class="btn text-white rounded-pill py-2 px-3" style="background-color: #4D4B49;text-decoration: none; opacity:1.0; box-shadow:none; border:none">Kembali</a>
            <button type="submit" name="submit" class="btn text-white rounded-pill py-2 px-3" style="background-color: #948989; text-decoration: none; opacity: 1.0; box-shadow: none; border: none">Submit</button>
        </div>
    </div>
</form>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".atraksi", {
        slidesPerView: 2,
        speed: 1000,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 3,
            },
        },
    });
</script>
@endsection
