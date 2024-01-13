@extends('layouts.template')

@section('title', 'show')

@section('content')
    <table class="table" style="text-align: center">
        <tr>
            <th colspan="1">TITLE</th>
            <td colspan="3">{{ $nota->title }}</td>
        </tr>

        <tr>
            <th colspan="1">DESCRIPTION</th>
            <td colspan="3">{{ $nota->description }}</td>
        </tr>

        <tr>
            <th>CREATED</th>
            <td>{{ $nota->created_at }}</td>
            <th>UPDATED</th>
            <td>{{ $nota->updated_at }}</td>
        </tr>
        <tr>
            <td colspan="2"><h5><a href="{{route('notas.edit', $nota->id)}}">EDIT</a></h5></td>
            <td colspan="2"><h5><a href="">DELETE</a></h5></td>
        </tr>
        
    </table>
    
@endsection
