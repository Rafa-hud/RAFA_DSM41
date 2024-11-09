<!-- resources/views/protected.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Protegida</title>
</head>
<body>
    <h1>Esta es una página protegida</h1>

    @if(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <p>Si ves este mensaje, tus credenciales fueron incorrectas o intentaste acceder a una página protegida sin iniciar sesión.</p>
    
    <a href="{{ route('inicio') }}">Volver a Inicio</a>
</body>
</html>
