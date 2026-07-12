@extends('layouts.app')

@section('title', 'Libros')

@section('page-title', 'Gestión de Libros')

@section('content')

<div class="page-header">

    <div>
        <h2>Listado de Libros</h2>
        <p>Administra los libros registrados en la biblioteca.</p>
    </div>

    <a href="{{ route('libros.create') }}" class="btn-primary">
        <i class="bi bi-plus-circle"></i>
        Nuevo Libro
    </a>

</div>

<div class="table-card">

    <div class="table-toolbar">

        <input
            type="text"
            placeholder="Buscar libro..."
            class="search-input">

    </div>

    <table>

        <thead>

        <tr>

            <th>ID</th>

            <th>Título</th>

            <th>Autor</th>

            <th>Categoría</th>

            <th>Estado</th>

            <th>Acciones</th>

        </tr>

        </thead>

        <tbody>

        @forelse($libros as $libro)

        <tr>
            <td>{{ $libro->id }}</td>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->autor }}</td>
            <td>{{ $libro->categoria->nombre }}</td>
            <td>
                @if($libro->estado)
                    <span class="badge success">
                        Disponible
                    </span>
                @else
                    <span class="badge warning">
                        Prestado
                    </span>

                @endif
            </td>

            <td>

                <a href="{{ route('libros.edit', $libro) }}" class="btn-action edit">
                    <i class="bi bi-pencil"></i>
                </a>

                <button class="btn-action delete">

                    <i class="bi bi-trash"></i>

                </button>

            </td>

        </tr>

        @empty

        <tr>

        <td colspan="6" style="text-align:center">

        No existen libros registrados.

        </td>

        </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection