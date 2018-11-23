<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , 'default') | Josue</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css.min') }}">
</head>
<body>
        <header>
                <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
                    <a class="navbar-brand" href="#">Pagina Principal</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false">
                        <span class="navbar-toggler-ico"></span>
                    </button>
                </nav>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="{{ url('/usuarios') }}" class="nav-link">Usuarios</a>
                        </li>
                    </ul>
                </div>
            </header>

            <main role="main" class="container">
                <div class="row mt-3">
                    <div class="col-12">
                        @yield('content')
                    </div>
                    <div class="col-4">
                        <p> </p>
                    </div>
                </div>
            </main>

           {{--  <footer class="footer">
                <div class="container">
                    <span class="text-muted">https://JosueMarin.net</span>
                </div>
            </footer> --}}

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
