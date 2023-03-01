<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class indexController extends Controller
{
    public function index()
    {
        $surah = Http::get('https://api.npoint.io/99c279bb173a6e28359c/data')->json();
        // $allSurah = response()->json($surah);
        // $json = json_encode($allSurah);
        // dd($surah);

        // return $allSurah;
        return view('index', ['surah' => $surah]);
    }

    public function baca($id)
    {
        $surah = Http::get('https://api.npoint.io/99c279bb173a6e28359c/surat/'.$id)->json();
        // dd($surah);
        return view('baca', ['surah' => $surah]);
    }
}
