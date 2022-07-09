<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CovidController extends Controller
{
    public function prov()
    {
        $last_update = Http::get("https://data.covid19.go.id/public/api/prov.json");
        $responses = Http::get("https://data.covid19.go.id/public/api/prov.json")['list_data'];
        return view('covid')
            ->with('responses', $responses)
            ->with('last_update', $last_update);
    }
}
