<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function circuito()
    {
        $stages = Stage::orderBy('stage_number')->get();
        return view('pages.circuito', compact('stages'));
    }

    public function calendario()
    {
        $stages = Stage::orderBy('stage_number')->get();
        return view('pages.calendario', compact('stages'));
    }

    public function kits()
    {
        return view('pages.kits');
    }

    public function percursos(Request $request)
    {
        $stages = Stage::orderBy('stage_number')->get();
        $selectedCity = $request->get('cidade', 'brasilia');
        $selectedStage = Stage::where('slug', $selectedCity)->first() ?? $stages->first();
        $selectedDistance = $request->get('distancia', '10K');

        return view('pages.percursos', compact('stages', 'selectedStage', 'selectedDistance'));
    }

    public function resultados(Request $request)
    {
        $bib = $request->get('peito');
        $stages = Stage::orderBy('stage_number')->get();

        return view('pages.resultados', compact('bib', 'stages'));
    }

    public function regulamentos()
    {
        $stages = Stage::orderBy('stage_number')->get();
        return view('pages.regulamentos', compact('stages'));
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function patrocinadores()
    {
        return view('pages.patrocinadores');
    }
}
