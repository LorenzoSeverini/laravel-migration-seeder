<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::whereDate('orario_partenza', $currentDate)->get();
        $links = config('store.links');

        return view('homePage', compact('trains', 'links'));
    }

    public function treniAttuali()
    {
        $currentTime = Carbon::now()->toTimeString();
        $trainsAvailable = Train::where('orario_partenza', '>=', $currentTime)->get();
        $links = config('store.links');

        return view('treniAttuali', compact('trainsAvailable', 'links'));
    }
}
