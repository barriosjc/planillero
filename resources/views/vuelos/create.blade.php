<!-- resources/views/planillas/create.blade.php -->
@extends('layouts.main')

@section('contenido')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Crea nuevo vuelo</h3>
            <a href="{{ route('vuelos.index', $planilla_id) }}" class="btn btn-primary btn-sm float-right">Volver</a>
        </div>
        <div class="card-body">
            <form action="{{ route('vuelos.store') }}" method="POST">
                @csrf 
                @include('vuelos.form')
                
            </form>
        </div>
    </div>
</div>
@endsection
