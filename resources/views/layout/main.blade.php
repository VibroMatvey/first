<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css')}} ">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clients') }}">Клиенты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('req') }}">Поиск</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('create') }}">Регистрация</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
        <div class="container">
            <div class="row">
                @yield('content')
                @yield('search')
            </div>
        </div>
</body>
</html>