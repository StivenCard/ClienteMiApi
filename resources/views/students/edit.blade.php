@extends('layouts.app')

@section('title', 'Editar Estudiante')

@section('content')
    <h2 class="text-center text-primary mb-4">
        <i class="bi bi-pencil-fill"></i> Editar Estudiante
    </h2>

    {{-- Mostrar errores generales --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-body">
                    <x-formulario-estudiante
                        :action="route('estudiantes.update', $estudiante['id'])"
                        method="PUT"
                        button-text="Actualizar"
                        :estudiante="$estudiante"
                    />
                    <div class="mt-3 text-center">
                        <a href="{{ route('estudiantes.index') }}" class="btn btn-outline-secondary">
                            ← Volver al listado
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
