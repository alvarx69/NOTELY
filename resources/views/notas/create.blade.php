@extends('layouts.template')

@section('title', 'create')

@section('content')
<div class="container">
    <form method="POST" action="/laravel/blog/blog/public/notas/store">
        <table class="table" style="text-align: center">
            <tr>
                <th>TITLE</th>
                <td><input type="text" name="title">{{ csrf_field() }}</td>
            </tr>
            <tr>
                <th>DESCRIPTION</th>
                <td><textarea name="description" cols="30" rows="10"></textarea>{{ csrf_field() }}</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="ADD"></td>
            </tr>
        </table>
    </form>
    
</div>
@endsection