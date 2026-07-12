@extends('layouts.app')

@section('title','Categorías')

@section('page-title','Gestión de Categorías')

@section('content')

<div class="page-header">

    <div>

        <h2>Categorías</h2>

        <p>Administra las categorías de los libros.</p>

    </div>

    <a href="#" class="btn-primary">

        <i class="bi bi-plus-circle"></i>

        Nueva Categoría

    </a>

</div>

<div class="table-card">

    <div class="table-toolbar">

        <input
            type="text"
            class="search-input"
            placeholder="Buscar categoría...">

    </div>

    <table>

        <thead>

            <tr>

                <th>ID</th>

                <th>Nombre</th>

                <th>Descripción</th>

                <th>Acciones</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td>1</td>

                <td>Programación</td>

                <td>Libros relacionados con desarrollo de software.</td>

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

                <td>Literatura</td>

                <td>Novelas, cuentos y obras clásicas.</td>

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