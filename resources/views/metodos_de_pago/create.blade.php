@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Método de Pago</title>
    <!-- Agrega Bootstrap CSS si no lo tienes ya -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Crear Método de Pago</h2>
            <form action="{{ route('metodos_de_pago.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="tipo" class="form-label">Tipo:</label>
                    <input type="text" name="tipo" id="tipo" class="form-control">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="activo" id="activo" class="form-check-input" value="1" checked>
                    <label for="activo" class="form-check-label">Activo</label>
                </div>

                <div class="mb-3">
                    <label for="comision" class="form-label">Comisión (%):</label>
                    <input type="number" name="comision" id="comision" class="form-control" min="0" max="100" step="0.01">
                </div>

                <button type="submit" class="btn btn-primary w-100">Guardar</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
