@extends('layouts.template')

@section('title', 'EDIT')

@section('content')
    <h2 style="text-align: center; margin-bottom: 40px">EDITING</h2>
    <form action="/laravel/blog/blog/public/notas/edit/{{$nota->id}}" method="POST">
        <table class="table" style="text-align: center">
            <tr>
                <th colspan="1">TITLE</th>
                <td colspan="3"><input type="text" name="title" value="{{ $nota->title }}"> {{ csrf_field() }}</td>
            </tr>
            
            <tr>
                <th colspan="1">DESCRIPTION</th>
                <td colspan="3">
                    <textarea name="description" cols="30" rows="10" >{{ $nota->description }}</textarea>{{ csrf_field() }}
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="EDIT">
                </td>
            </tr>
            
        </table>
    </form>
@endsection
