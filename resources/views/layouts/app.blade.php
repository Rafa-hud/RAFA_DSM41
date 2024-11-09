<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Application @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    @yield('styles')
</head>
<body>
    <div class="container my-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
            <a class="navbar-brand text-primary font-weight-bold" href="{{ route('inicio') }}" style="font-size: 1.5rem;">Mi Empresa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('inicio') }}" class="nav-link" style="font-size: 2.25rem;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('productos.create') }}" class="nav-link" style="font-size: 2.25rem;">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.store') }}" class="nav-link" style="font-size: 2.25rem;">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('metodos_de_pago.create') }}" class="nav-link" style="font-size: 2.25rem;">Métodos de Pago</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('herramientas.create') }}" class="nav-link" style="font-size: 2.25rem;">Herramientas</a>
                    </li>
                    <!-- Enlace de Login en la esquina superior derecha -->
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link" style="font-size: 1.25rem; position: absolute; top: 10px; right: 20px;">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    
        @yield('content')
    </div>
    
    <!-- Bootstrap CSS y JavaScript (Asegúrate de incluir esto en tu archivo de layout o plantilla principal) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
