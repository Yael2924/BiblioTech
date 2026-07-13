@extends('layouts.app')

@section('title', 'Categorías')

@section('page-title', 'Categorías')

@section('content')

<div class="page-header">

    <div>
        <h2>Gestión de Categorías</h2>
        <p>Administra las categorías disponibles para la biblioteca.</p>
    </div>

    <a href="{{ route('categorias.create') }}" class="btn-primary">
        <i class="bi bi-plus-circle"></i>
        Nueva Categoría
    </a>

</div>

<div class="table-card">

    <table class="table">

        <thead>

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th style="width:120px;">Acciones</th>
            </tr>

        </thead>

        <tbody>

        @forelse($categorias as $categoria)

            <tr>

                <td>{{ $categoria->id }}</td>

                <td>{{ $categoria->nombre }}</td>

                <td>{{ $categoria->descripcion }}</td>

                <td>

                    @if($categoria->estado)

                        <span class="badge-success">Activa</span>

                    @else

                        <span class="badge-danger">Inactiva</span>

                    @endif

                </td>

                <td>

                    <a href="{{ route('categorias.edit', $categoria) }}" class="btn-action edit">
                        <i class="bi bi-pencil"></i>
                    </a>

                    <form action="{{ route('categorias.destroy', $categoria) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button
                            class="btn-action delete"
                            onclick="return confirm('¿Deseas eliminar esta categoría?')">

                            <i class="bi bi-trash"></i>

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="5" style="text-align:center;">
                    No hay categorías registradas.
                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection