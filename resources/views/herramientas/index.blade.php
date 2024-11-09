@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Herramientas</h1>
    <a href="{{ route('herramientas.create') }}" class="btn btn-primary">Agregar Herramienta</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Disponible</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($herramientas as $herramienta)
            <tr>
                <td>{{ $herramienta->id }}</td>
                <td>{{ $herramienta->nombre }}</td>
                <td>{{ $herramienta->descripcion }}</td>
                <td>{{ $herramienta->cantidad }}</td>
                <td>{{ $herramienta->disponible ? 'Sí' : 'No' }}</td>
                <td>
                    <a href="{{ route('herramientas.show', $herramienta) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('herramientas.edit', $herramienta) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('herramientas.destroy', $herramienta) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta herramienta?');">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
