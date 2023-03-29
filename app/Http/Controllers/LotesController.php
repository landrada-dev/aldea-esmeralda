<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LotesController extends Controller
{
    public function lotes()
    {
        $response = Http::get('https://www.cms.devkoore.com/articles');
        $dataJson = $response->json();
        dd($dataJson);
        return view('lotes');
    }
}
