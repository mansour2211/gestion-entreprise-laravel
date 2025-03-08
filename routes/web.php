<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DocumentController;

// Route pour le Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Routes pour les ressources Employes, Clients, et Documents
Route::resource('employes', EmployeController::class);
Route::resource('clients', ClientController::class);
Route::resource('documents', DocumentController::class);

// Route par défaut pour rediriger vers le dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});
