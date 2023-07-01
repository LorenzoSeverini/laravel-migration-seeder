@php
    use Carbon\Carbon;
@endphp
@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row">
        <h1>Treni 🚂</h1>
        <div class="d-flex gap-3 mb-3">
            <h5>Treni di oggi</h5>
            <h5>{{ Carbon::now()->format('d/m/Y') }}</h5>
            <a href="{{ route('treniAttuali') }}">Vedi i treni attuali disponibili</a>
        </div>
    </div>

    <div class="row">
        @foreach ($trains as $train)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h3>{{ $train->codice_treno }}</h3>
                            <p>Data: {{ \Carbon\Carbon::parse($train->data)->format('d/m/Y') }}</p>
                        </div>
                        <div class="card-text">
                            <p>Stazione di partenza: {{ $train->stazione_partenza }}</p>
                            <p>Stazione di arrivo: {{ $train->stazione_arrivo }}</p>
                            <p>Orario di partenza: {{ $train->orario_partenza }}</p>
                            <p>Orario di arrivo: {{ $train->orario_arrivo }}</p>
                            <p>Numero Carrozze: {{ $train->numero_carrozze }}</p>
                            <p>In orario: {{ $train->in_orario ? 'Sì' : 'No' }}</p>
                            @if ($train->in_orario)
                                <div class="alert alert-success">
                                    This train is on time!
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    This train is late!
                                </div>
                            @endif
                            <p>Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}</p>
                            @if ($train->cancellato)
                                <div class="alert alert-danger">
                                    This train has been canceled!
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
