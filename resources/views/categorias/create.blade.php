@extends('layouts.app')

@section('title', 'Nueva Categoría')

@section('page-title', 'Nueva Categoría')

@section('content')

<div class="page-header">

    <div>
        <h2>Nueva Categoría</h2>
        <p>Registra una nueva categoría para la biblioteca.</p>
    </div>

</div>

<div class="table-card">

    <form action="{{ route('categorias.store') }}" method="POST">

        @csrf

        @include('categorias.partials.form')

        <div style="margin-top:25px; display:flex; gap:10px;">

            <button type="submit" class="btn-primary">

                <i class="bi bi-check-circle"></i>

                Guardar Categoría

            </button>

            <a href="{{ route('categorias.index') }}" class="btn-secondary">

                Cancelar

            </a>

        </div>

    </form>

</div>

@endsection