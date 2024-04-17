@extends('template')

@section('title', 'Homestay')

@section('table_title', 'Homestay')

@section('add_button')
    <a href="{{ url('homestay/create') }}" class="btn btn-success p-2" style="border-radius: 10px;"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
@endsection

@section('table_rows')
    @php $i = 1 @endphp
    @foreach ($homestay as $item)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td class="col-2">
                <button class="btn p-0"><a href="{{ url('homestay/'.$item->id) }}" class="show"><i class="material-icons" data-toggle="tooltip" title="Show">&#xe8f4;</i></a></button>
                <button class="btn p-0"><a href="{{ url('homestay/'.$item->id.'/edit') }}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a></button>
                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('homestay/'.$item->id) }}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn p-0 delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                </form>
            </td>
        </tr> 
        @php $i++ @endphp
    @endforeach
@endsection
