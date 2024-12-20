<!-- resources/views/planillas/create.blade.php -->
@extends('layouts.main')

@section('contenido')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Crear Nueva Planilla</h3>
            <a href="{{ route('planillas.index') }}" class="btn btn-primary btn-sm float-right">Volver</a>
        </div>
        <div class="card-body">
            <form action="{{ route('planillas.store') }}" method="POST">
                @csrf 
                @include('planillas.form')
            </form>
        </div>
    </div>
</div>
@endsection
