@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Berita</h2>
                </div>
                <div class="card-body">
                    <div class="pb-3">
                        <a href='{{ url('berita/create') }}' class="btn btn-primary">+ Tambah Data</a>
                    </div>
                 <!-- Loop through each berita -->
                 <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-1">Title</th>
                            <th class="col-md-3">Created At</th>
                            <th class="col-md-4">Updated At</th>
                            
                            <th class="col-md-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1
                        @endphp
                        @foreach ($berita as $item)
                        
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href='{{ url('berita/'.$item->id.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                <a href='{{ url('berita/'.$item->id) }}' class="btn btn-primary btn-sm">Show</a>
                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('berita/'.$item->id) }}" method="post">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            
                        </tr>
                        @php
                            $i++
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection