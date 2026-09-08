@extends('layouts.app')

@section('title', 'Nuevo Libro')

@section('page-title', 'Registrar Libro')

@section('content')

<div class="page-header">

    <div>

        <h2>Registrar Libro</h2>

        <p>Completa la información del libro.</p>

    </div>

</div>

<div class="table-card">

    <form id="formLibro" action="{{ route('libros.store') }}" method="POST">

        @csrf

        @include('libros.partials.form')

        <div style="margin-top:25px;">

            <button class="btn-primary">

                Guardar Libro

            </button>

        </div>

    </form>

</div>

@endsection