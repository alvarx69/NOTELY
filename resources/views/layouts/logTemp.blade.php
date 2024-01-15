<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('main.css')}}">
</head>

<body>
    <nav class="navbar" style="background-color: #faea81;">
        <div class="container-fluid ">
            <a class="navbar-brand" href="">
                <img style="width: 10%" class="rounded float-start" src="{{ asset('images/logo.png') }}" alt="logo">
                <h1 class="h1" style="font-family: 'Bowlby One SC', sans-serif;">NOTELY</h1>
            </a>
        </div>
    </nav>
    <ul class="nav justify-content-center" style="background-color: #fbed93; margin-bottom: 150px;">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">LOGIN</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
        </li>
        
        
    </ul>

    @yield('content')

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>