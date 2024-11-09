@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 500px; margin-top: 50px;">
        <h3 style="text-align: center; font-weight: bold; margin-bottom: 20px;">Actualizar Usuario</h3>
        
        <form action="{{ route('user.update.data') }}" method="post" style="background-color: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
            @csrf

            <!-- Campo oculto para el ID del usuario -->
            <input type="hidden" name="id" value="{{ $usuario->id }}">

            <!-- Campo de nombre -->
            <div style="margin-bottom: 15px;">
                <label for="nombre" style="font-weight: bold;">Nombre</label>
                <input type="text" name="nombre" value="{{ $usuario->name }}" id="nombre" style="width: 100%; padding: 8px; border-radius: 4px; border: 1px solid #ccc;" required>
            </div>

            <!-- Botón de actualización -->
            <div style="text-align: center;">
                <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
@endsection
