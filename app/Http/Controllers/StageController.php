<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function index(Request $request): RedirectResponse
    {
        return redirect()->to(url('/#calendario'));
    }

    public function show(Stage $stage): RedirectResponse
    {
        return redirect()->to(url('/#calendario'));
    }
}
