<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StageController;
use Illuminate\Support\Facades\Route;

// Public Website Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/o-circuito', [PageController::class, 'circuito'])->name('pages.circuito');
Route::get('/etapas', [StageController::class, 'index'])->name('stages.index');
Route::get('/etapas/{stage:slug}', [StageController::class, 'show'])->name('stages.show');
Route::get('/calendario', [PageController::class, 'calendario'])->name('pages.calendario');
Route::get('/kits', [PageController::class, 'kits'])->name('pages.kits');
Route::get('/percursos', [PageController::class, 'percursos'])->name('pages.percursos');
Route::get('/resultados', [PageController::class, 'resultados'])->name('pages.resultados');
Route::get('/regulamentos', [PageController::class, 'regulamentos'])->name('pages.regulamentos');
Route::get('/faq', [PageController::class, 'faq'])->name('pages.faq');
Route::get('/contato', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contato', [ContactController::class, 'store'])->name('contact.store');
Route::get('/patrocinadores', [PageController::class, 'patrocinadores'])->name('pages.patrocinadores');

// Dashboard & Future Manager (Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
