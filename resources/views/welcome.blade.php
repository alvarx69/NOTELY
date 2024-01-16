@extends('layouts.logTemp')

@section('title', 'index')

@section('content')


    @if (Route::has('login'))
        <div style=" font-family: Arial, Helvetica, sans-serif; text-align: center;">
            <h2 style=" font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">BIENVENID@ A NOTELY</h2>
            <section>
                <p style="margin-top: 5%;  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                    En notely podras crear notas rapidas y concisas o mas largas y especificas. <br>
                    Esta aplicacion esta diseñada para organizarte el dia o la semana <br>
                    Puedes apoyarnos dando una estrellita en <a href="https://github.com/alvarx69/NOTELY">GitHub</a> o seguirnos en <a href="https://www.instagram.com/_alvarx_/">Instagram</a>
                </p>
            </section>
        </div>
    @endif

@endsection
