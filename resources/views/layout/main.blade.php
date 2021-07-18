<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/74d1e4ed84.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<header class="head-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="/img/logo2.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{route('project.create')}}">Criar projeto</a>
                @guest()
                    <a class="nav-item nav-link" href="{{route('login')}}">Entrar</a>
                    <a class="nav-item nav-link" href="{{route('register')}}">Register</a>
                @endguest
                @auth()
                    <a class="nav-item nav-link" href="{{route('dashboard')}}">Painel</a>

                    <form action="{{route('logout')}}" method="post" id="logout">
                        @csrf
                        <button class="nav-item nav-link" type="submit">Sair</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
</header>
<body>
    @if(session('msg'))
        <div class="msg">
            <ul>
                <li>{{session('msg')}}</li>
            </ul>
        </div>
    @endif

    @yield('content')
    <footer class="footer">
        <p>CDD &copy; 2021</p>
    </footer>
</body>
</html>
