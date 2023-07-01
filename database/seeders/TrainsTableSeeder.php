<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    public function run()
    {
        $trains = config('seeder.trains');
        foreach ($trains as $trainData) {

            $existingTrain = Train::where('codice_treno', $trainData['codice_treno'])->first();

            if ($existingTrain) {
                continue;
            } else {
                $train = new Train();
                $train->azienda = $trainData['azienda'];
                $train->stazione_partenza = $trainData['stazione_partenza'];
                $train->stazione_arrivo = $trainData['stazione_arrivo'];
                $train->orario_partenza = $trainData['orario_partenza'];
                $train->orario_arrivo = $trainData['orario_arrivo'];
                $train->codice_treno = $trainData['codice_treno'];
                $train->numero_carrozze = $trainData['numero_carrozze'];
                $train->in_orario = $trainData['in_orario'];
                $train->cancellato = $trainData['cancellato'];
                $train->data = $trainData['data'];
                $train->save();
            }
        }
    }
}
