@extends('layouts.app')

@section('title', 'Libros')

@section('page-title', 'Gestión de Libros')

@section('content')

<div class="page-header">

    <div>
        <h2>Listado de Libros</h2>
        <p>Administra los libros registrados en la biblioteca.</p>
    </div>

    <a href="#" class="btn-primary">
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

        <tr>

            <td>1</td>

            <td>Clean Code</td>

            <td>Robert C. Martin</td>

            <td>Programación</td>

            <td>
                <span class="badge success">
                    Disponible
                </span>
            </td>

            <td>

                <button class="btn-action edit">
                    <i class="bi bi-pencil"></i>
                </button>

                <button class="btn-action delete">
                    <i class="bi bi-trash"></i>
                </button>

            </td>

        </tr>

        <tr>

            <td>2</td>

            <td>Laravel Up & Running</td>

            <td>Matt Stauffer</td>

            <td>Programación</td>

            <td>

                <span class="badge warning">

                    Prestado

                </span>

            </td>

            <td>

                <button class="btn-action edit">

                    <i class="bi bi-pencil"></i>

                </button>

                <button class="btn-action delete">

                    <i class="bi bi-trash"></i>

                </button>

            </td>

        </tr>

        </tbody>

    </table>

</div>

@endsection