<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Train::firstOrCreate([
            'azienda' => 'Azienda 1',
            'stazione_partenza' => 'Stazione A',
            'stazione_arrivo' => 'Stazione B',
            'orario_partenza' => '08:00:00',
            'orario_arrivo' => '10:00:00',
            'codice_treno' => 'ABC123',
            'numero_carrozze' => 5,
            'in_orario' => true,
            'cancellato' => false,
        ]);

        Train::firstOrCreate([
            'azienda' => 'Azienda 2',
            'stazione_partenza' => 'Stazione C',
            'stazione_arrivo' => 'Stazione D',
            'orario_partenza' => '12:00:00',
            'orario_arrivo' => '14:00:00',
            'codice_treno' => 'DEF456',
            'numero_carrozze' => 3,
            'in_orario' => true,
            'cancellato' => false,
        ]);

        Train::firstOrCreate([
            'azienda' => 'Azienda 3',
            'stazione_partenza' => 'Stazione E',
            'stazione_arrivo' => 'Stazione F',
            'orario_partenza' => '19:00:00',
            'orario_arrivo' => '20:00:00',
            'codice_treno' => 'GHI789',
            'numero_carrozze' => 7,
            'in_orario' => true,
            'cancellato' => false,
        ]);

        Train::firstOrCreate([
            'azienda' => 'Azienda 4',
            'stazione_partenza' => 'Stazione G',
            'stazione_arrivo' => 'Stazione H',
            'orario_partenza' => '22:00:00',
            'orario_arrivo' => '23:00:00',
            'codice_treno' => 'JKL012',
            'numero_carrozze' => 2,
            'in_orario' => true,
            'cancellato' => false,
        ]);
    }
};
