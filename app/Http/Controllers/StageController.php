<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index(Request $request)
    {
        $query = Stage::orderBy('stage_number');

        if ($request->filled('region') && $request->region !== 'todas') {
            $query->where('region', $request->region);
        }

        if ($request->filled('status') && $request->status !== 'todas') {
            $query->where('status', $request->status);
        }

        $stages = $query->get();
        $regions = Stage::select('region')->distinct()->pluck('region');

        return view('stages.index', compact('stages', 'regions'));
    }

    public function show(Stage $stage)
    {
        // Get next and previous stages for smooth navigation
        $prevStage = Stage::where('stage_number', '<', $stage->stage_number)->orderBy('stage_number', 'desc')->first();
        $nextStage = Stage::where('stage_number', '>', $stage->stage_number)->orderBy('stage_number', 'asc')->first();

        return view('stages.show', compact('stage', 'prevStage', 'nextStage'));
    }
}
