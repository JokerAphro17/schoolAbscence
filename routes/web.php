<?php

//use App\Http\Controllers\AbscenceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('filieres', FiliereController::class);
    Route::resource('modules', ModuleController::class);
    Route::resource('classes', ClasseController::class);
    Route::resource('abscences', AbscenceController::class);
    Route::resource('seance_cours', SceanceCourController::class);
    Route::resource('enseignants', EnseignantController::class);
});



require __DIR__ . '/auth.php';
