@extends('layouts.app')
@section('page-title', 'Treni attuali 👌')
@section('content')

<div class="container p-3">
    <a href="{{route('homePage')}}">Home Page</a>
    <h1>Treni attuali 🚅</h1>

    <div class="row">
        @foreach($trainsAvailable as $train)
            @unless ($train->cancellato)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h3>{{ $train->codice_treno }}</h3>
                            </div>
                            <div class="card-text">
                                <p>Stazione di partenza: {{ $train->stazione_partenza }}</p>
                                <p>Stazione di arrivo: {{ $train->stazione_arrivo }}</p>
                                <p>Orario di partenza: {{ $train->orario_partenza }}</p>
                                <p>Orario di arrivo: {{ $train->orario_arrivo }}</p>
                                <p>Numero Carrozze: {{ $train->numero_carrozze }}</p>
                                @if ($train->in_orario)
                                    <div class="alert alert-success">
                                        Questo treno è in orario!
                                    </div>
                                @else
                                    <div class="alert alert-warning">
                                        Questo treno è in ritardo!
                                    </div>
                                @endif
                                <div class="alert alert-success">
                                    Questo treno non è stato cancellato!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endunless
        @endforeach
    </div>
</div>
@endsection
