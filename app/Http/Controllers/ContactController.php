<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Stage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $stages = Stage::orderBy('stage_number')->get();
        $selectedCategory = $request->get('type', 'atleta');

        return view('contact.index', compact('stages', 'selectedCategory'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'category' => 'required|string|in:atleta,assessoria,patrocinio,imprensa,outro',
            'city_interest' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        ContactMessage::create($validated);

        return back()->with('success', 'Mensagem enviada com sucesso! Nossa equipe do Circuito ONE MOVE retornará em breve.');
    }
}
