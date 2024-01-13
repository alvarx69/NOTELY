@extends('layouts.template')

@section('title', 'index')

@section('content')
    <div class="container">
        <table class="table" style="text-align: center">
            <tr>
                <th>TITLE</th>
                <th>DESCRIPTION</th>
            </tr>
            @foreach ($notes as $note)
                <tr>
                    <td><a href="{{ route('notas.show', $note->id) }}">{{ $note->title }}</a></td>
                    <td>{{ $note->description }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
