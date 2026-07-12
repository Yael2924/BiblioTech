@extends('layouts.app')

@section('title', 'Editar Libro')

@section('page-title', 'Editar Libro')

@section('content')

<div class="page-header">

    <div>

        <h2>Editar Libro</h2>

        <p>Modifica la información del libro.</p>

    </div>

</div>

<div class="table-card">

    <form action="{{ route('libros.update', $libro) }}" method="POST">

        @csrf
        @method('PUT')

        @include('libros.partials.form')

        <div style="margin-top:25px; display:flex; gap:20px;">

            <button type="submit" class="btn-primary">

                <i class="bi bi-check-circle"></i>

                Actualizar Libro

            </button>

            <a href="{{ route('libros.index') }}" class="btn-secondary">

                Cancelar

            </a>

        </div>

    </form>

</div>

@endsection