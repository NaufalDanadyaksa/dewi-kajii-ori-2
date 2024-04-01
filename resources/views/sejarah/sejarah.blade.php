@extends('layout')

@section('content')
    <h2>sejarah</h2>
    <form action="{{ route('sejarah.update', $sejarah->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
       

        <div class="form-group">
            <label for="description">Artikel</label>
            <textarea type="text" class="form-control text-white p-3"
            id="article" name="article" style="background-color:
            #886c6c;text-decoration: none; opacity:1.0; box-shadow:none; border-radius:20px;
            border:none" rows="5">{{ $sejarah->article }}</textarea>
        </div>

       
        <div class="row justify-content-end">
            <div class="col-auto">
              <button
                type="submit"
                name="submit"
                class="btn text-white rounded-pill py-2 px-3 mt-3"
                style="background-color: #948989;text-decoration: none;
                opacity:1.0;
                box-shadow:none;
                border:none""
              >
                Update
              </button>
            </div>
        </div>
      
    </form>
@endsection
