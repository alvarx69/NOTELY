@extends('layouts.template')

@section('title', 'show')

@section('content')

@foreach ($note as $no)
    <table class="table" style="text-align: center">
    <tr>
        <th colspan="1">TITLE</th>
        <td colspan="3">{{ $no->title }}</td>
    </tr>

    <tr>
        <th colspan="1">DESCRIPTION</th>
        <td colspan="3">{{ $no->description }}</td>
    </tr>

    <tr>
        <th>CREATED</th>
        <td>{{ $no->created_at }}</td>
        <th>UPDATED</th>
        <td>{{ $no->updated_at }}</td>
    </tr>
    <tr>
        <td colspan="2"><h5><a href="{{route('notas.edit', $no->id)}}">EDIT</a></h5></td>
        <td colspan="2"><h5><a href="{{route('notas.delete', $no->id)}}">DELETE</a></h5></td>
    </tr>
    
</table>
       
    @endforeach


    {{ $note->links() }}

@endsection
