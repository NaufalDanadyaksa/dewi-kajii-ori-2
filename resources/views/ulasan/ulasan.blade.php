@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2> ulasan</h2>
                </div>
                <div class="card-body">
                   
                 <!-- Loop through each atraksi -->
                 <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-1">Nama</th>
                            <th class="col-md-3">Created At</th>
                            <th class="col-md-4">Updated At</th>
                            
                            <th class="col-md-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1
                        @endphp
                        @foreach ($ulasan as $item)
                        
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ url('ulasan/'.$item->id) }}" class="btn btn-primary btn-sm ">Show</a>
                                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('ulasan/'.$item->id) }}" method="post">
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