<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stages = Stage::orderBy('stage_number')->get();
        $featuredStage = Stage::where('is_featured', true)->first() ?? $stages->first();
        $openStages = $stages->where('status', 'open');
        $soonStages = $stages->where('status', 'soon');

        return view('home', compact('stages', 'featuredStage', 'openStages', 'soonStages'));
    }
}
