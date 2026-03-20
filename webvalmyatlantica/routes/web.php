<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Public/Landing',);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/contacto', function () {
    return Inertia::render('Public/Contact');
});

Route::get('/servicios/energia', function () {
    return Inertia::render('Public/EnergyDecision');
});

Route::get('/servicios/experiencia', function () {
    return Inertia::render('Public/EnergyExperience');
});

Route::get('/servicios/acompanamiento', function () {
    return Inertia::render('Public/EnergySupport');
});

Route::get('/wip', function () {
    return Inertia::render('Public/LoginTemporal');
})->name('login');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/companies', [CompanyController::class, 'index'])
    ->middleware(['auth'])
    ->name('companies.index');
    Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
    
});
