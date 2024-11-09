@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Herramienta</h1>
    
    <form action="{{ route('herramientas.update', $herramienta) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $herramienta->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion">{{ $herramienta->descripcion }}</textarea>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $herramienta->cantidad }}" min="0">
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="disponible" name="disponible" {{ $herramienta->disponible ? 'checked' : '' }}>
            <label class="form-check-label" for="disponible">Disponible</label>
        </div>
        
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('herramientas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
