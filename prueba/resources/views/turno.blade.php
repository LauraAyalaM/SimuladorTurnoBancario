@extends('layout')

@section('content')

<h2 class="mb-4 title">Simulador de Turno Bancario</h2>

<div class="card card-dark p-4 shadow-sm mb-5">
    <form method="POST" action="{{ route('turno.generar') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nombre del Cliente</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Tipo de trámite</label>
            <select name="tipo" class="form-select" required>
                <option value="caja">Caja</option>
                <option value="servicio">Servicio al Cliente</option>
                <option value="creditos">Créditos</option>
            </select>
        </div>

        <button class="btn btn-primary w-100">Generar Turno</button>
    </form>
</div>

<h5 class="mb-3 text-uppercase">Filas Actuales</h5>

<div class="row">
@foreach($filas as $tipo => $fila)
    <div class="col-md-4 mb-4">
        <div class="card card-dark p-3 h-100">
            <h6 class="text-uppercase mb-3">
                {{ ucfirst($tipo) }}
                <span class="badge badge-secondary-dark">
                    {{ count($fila) }} en espera
                </span>
            </h6>

            <ul class="list-unstyled small">
                @foreach($fila as $persona)
                    <li class="mb-4">
                        <span class="badge-turno">{{ $persona['turno'] }}</span>
                        - {{ $persona['nombre'] }}
                    </li>
                @endforeach
            </ul>

            <form method="POST" action="{{ route('turno.atender', $tipo) }}" class="mt-auto">
                @csrf
                <button class="btn btn-success btn-sm w-100">
                    Atender siguiente
                </button>
            </form>
        </div>
    </div>
@endforeach
</div>

<form method="POST" action="{{ route('turno.reset') }}">
    @csrf
    <button class="btn btn-danger w-100 mt-3">
        Reiniciar Sistema
    </button>
</form>

@endsection