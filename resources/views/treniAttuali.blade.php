@extends('layouts.app')
@section('page-title', 'Treni attuali 👌')
@section('content')

<div class="container p-3">
    <a href="{{route('homePage')}}">Home Page</a>
    <h1>Treni attuali 🚅</h1>

    <div class="row">
        @foreach($trainsAvailable as $train)
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
                            <p>In orario: {{ $train->in_orario ? 'Sì' : 'No' }}</p>
                            <p>Cancellato: {{ $train->cancellato ? 'Sì' : 'No' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
