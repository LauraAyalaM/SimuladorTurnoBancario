@extends('layout')

@section('content')

<div class="card card-dark p-5 shadow-sm text-center">

    <h3 class="mb-4 text-uppercase fw-semibold">
        Turno Asignado
    </h3>

    <p class="mb-2">
        <span class="fw-semibold">Cliente:</span>
        {{ $nombre }}
    </p>

    <p class="mb-2">
        <span class="fw-semibold">Trámite:</span>
        {{ $tipo }}
    </p>

    <div class="my-4">
        <span class="badge-turno display-6">
            {{ $turno }}
        </span>
    </div>

    <p class="mb-4">
        Personas antes en la fila:
        <span class="fw-semibold">
            {{ $personasAntes }}
        </span>
    </p>

    <a href="{{ route('turno.index') }}" class="btn btn-primary w-100">
        Volver al Inicio
    </a>

</div>

@endsection