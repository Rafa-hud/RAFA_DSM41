@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Herramienta</h1>
    
    <p><strong>ID:</strong> {{ $herramienta->id }}</p>
    <p><strong>Nombre:</strong> {{ $herramienta->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $herramienta->descripcion }}</p>
    <p><strong>Cantidad:</strong> {{ $herramienta->cantidad }}</p>
    <p><strong>Disponible:</strong> {{ $herramienta->disponible ? 'Sí' : 'No' }}</p>
    
    <a href="{{ route('herramientas.index') }}" class="btn btn-secondary">Volver a la lista</a>
</div>
@endsection
