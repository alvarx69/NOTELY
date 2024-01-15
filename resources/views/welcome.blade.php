@extends('layouts.logTemp')

@section('title', 'index')

@section('content')
    

    @if (Route::has('login'))
    
        {{-- @auth
        <a href="{{ url('/dashboard') }}">Dashboard</a>
        @else --}}
        <div style="display: flex; flex-direction: row; justify-content: center;">
            
                <div style="margin-top: 20%; width: 60%; height: 10pc; border: 2px solid black; background-color: rgb(255, 255, 171); display: flex; justify-content: center; align-items: center; flex-direction: column">
                    <h2 style="margin: 3px"><a href="{{ route('login') }}">Log in</a></h2>

            {{-- @if (Route::has('register')) --}}
                    <h2 style="margin: 30px"><a href="{{ route('register') }}">Register</a></h2>
                </div>
            
        </div>
        
        {{-- @endif
        @endauth --}}
    
    @endif
    
@endsection
