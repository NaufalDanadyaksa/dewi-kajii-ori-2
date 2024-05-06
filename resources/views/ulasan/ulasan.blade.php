@extends('template')

@section('title', 'Ulasan')

@section('table_title', 'Ulasan')

@section('table_rows')
    @php $i = 1 @endphp
    @foreach ($ulasan as $item)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->updated_at }}</td>
            <td class="col-2">
                <button class="btn p-0"><a href="{{ url('ulasan/'.$item->id) }}" class="show"><i class="material-icons" data-toggle="tooltip" title="Show">&#xe8f4;</i></a></button>
                <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('ulasan/'.$item->id) }}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button type="submit" class="btn p-0 delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                </form>
            </td>
        </tr> 
        @php $i++ @endphp
    @endforeach
@endsection