@extends('layouts.app')

@section('title', 'Listado de Usuarios')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f8f9fa;
    }
    .table-container {
        max-width: 900px;
        margin: 50px auto;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }
    .table {
        margin: 0;
        border-radius: 10px;
        background-color: white;
    }
    thead {
        background-color: #007bff;
        color: white;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    .btn {
        margin: 0 5px;
    }
</style>
@endsection

@section('content')
<div class="container table-container">
    <h1 class="text-center mt-4 mb-4">Lista de Usuarios</h1>
    <table class="table table-hover table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
            <tr>
                <td class="align-middle">{{ $usuario->name }}</td>
                <td class="text-center">
                    <a href="{{ route('user.update', $usuario->id) }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>
                    <form action="{{ route('user.destroy', $usuario->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger mx-1" 
                            onclick="return confirm('¿Estás seguro de eliminar este usuario?');">
                            <i class="bi bi-trash"></i> Eliminar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
        {{ $usuarios->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection

