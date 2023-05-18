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
        return view('covid_prov.index')
            ->with('responses', $responses)
            ->with('last_update', $last_update);
    }

    public function detail_prov($id)
    {
        $graph = Http::get("https://data.covid19.go.id/public/api/prov_time.json")['list'];
        $response = Http::get("https://data.covid19.go.id/public/api/prov.json")['list_data'][$id];
        return view('covid_prov.detail')
            ->with('id', $id)
            ->with('graph', $graph)
            ->with('response', $response);
    }
}
