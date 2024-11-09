@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 w-100" style="max-width: 400px;">
        <h2 class="text-center mb-4">Registrar una cuenta</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input 
                    type="text" 
                    name="nombre" 
                    id="nombre" 
                    class="form-control" 
                    placeholder="Ingrese su nombre" 
                    required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input 
                    type="email" 
                    name="correo" 
                    id="correo" 
                    class="form-control" 
                    placeholder="Ingrese su correo" 
                    required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input 
                    type="password" 
                    name="password" 
                    id="password" 
                    class="form-control" 
                    placeholder="Ingrese su contraseña" 
                    required>
            </div>

            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>

            <div class="text-center">
                <p class="text-muted">
                    ¿Ya tienes cuenta? <a href="{{ route('login') }}" class="text-primary">Inicia sesión aquí</a>
                </p>
            </div>
        </form>
    </div>
</div>
@endsection
