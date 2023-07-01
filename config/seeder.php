<?php

return [
    'trains' => [

        [
            'azienda' => 'Italo',
            'stazione_partenza' => 'Milano Centrale',
            'stazione_arrivo' => 'Roma Termini',
            'orario_partenza' => '08:00:00',
            'orario_arrivo' => '13:00:00',
            'codice_treno' => 'ABC123',
            'numero_carrozze' => 5,
            'in_orario' => false,
            'cancellato' => false,
            'data' => Carbon\Carbon::now()->toDateString(),
        ],
        [
            'azienda' => 'Trenitalia',
            'stazione_partenza' => 'Firenze Santa Maria Novella',
            'stazione_arrivo' => 'Napoli Centrale',
            'orario_partenza' => '12:00:00',
            'orario_arrivo' => '14:00:00',
            'codice_treno' => 'DEF456',
            'numero_carrozze' => 7,
            'in_orario' => true,
            'cancellato' => false,
            'data' => Carbon\Carbon::now()->toDateString(),
        ],
        [
            'azienda' => 'Italo',
            'stazione_partenza' => 'Venezia Santa Lucia',
            'stazione_arrivo' => 'Roma Termini',
            'orario_partenza' => '19:00:00',
            'orario_arrivo' => '23:00:00',
            'codice_treno' => 'GHI789',
            'numero_carrozze' => 7,
            'in_orario' => true,
            'cancellato' => false,
            'data' => Carbon\Carbon::now()->toDateString(),
        ],
        [
            'azienda' => 'Trenitalia',
            'stazione_partenza' => 'Torino Porta Nuova',
            'stazione_arrivo' => 'Bologna Centrale',
            'orario_partenza' => '20:00:00',
            'orario_arrivo' => '22:00:00',
            'codice_treno' => 'JKL012',
            'numero_carrozze' => 5,
            'in_orario' => false,
            'cancellato' => false,
            'data' => Carbon\Carbon::now()->toDateString(),
        ],
        [
            'azienda' => 'Italo',
            'stazione_partenza' => 'Milano Centrale',
            'stazione_arrivo' => 'Roma Termini',
            'orario_partenza' => '08:00:00',
            'orario_arrivo' => '13:00:00',
            'codice_treno' => 'MNO345',
            'numero_carrozze' => 5,
            'in_orario' => true,
            'cancellato' => true,
            'data' => Carbon\Carbon::now()->toDateString(),
        ],
    ],
];
