<?php

//use App\Http\Controllers\AbscenceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EleveController;

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
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('filieres', FiliereController::class);
    Route::resource('modules', ModuleController::class);
    Route::resource('seance_cours', SceanceCourController::class);
    Route::resource('enseignants', EnseignantController::class);
    Route::get('classes', [ClasseController::class, 'index'])->name('classes.index');
    Route::get('classes/create', [ClasseController::class, 'create'])->name('classes.create');
    Route::post('classes', [ClasseController::class, 'store'])->name('classes.store');
    Route::get('classes/{classe}', [ClasseController::class, 'show'])->name('classes.show');
    Route::get('classes/{classe}/edit', [ClasseController::class, 'edit'])->name('classes.edit');
    Route::put('classes/{classe}', [ClasseController::class, 'update'])->name('classes.update');
    Route::delete('classes/{classe}', [ClasseController::class, 'destroy'])->name('classes.destroy');
    Route::get('eleves', [EleveController::class, 'index'])->name('eleves.index');
    Route::get('eleves/create', [EleveController::class, 'create'])->name('eleves.create');
    Route::post('eleves', [EleveController::class, 'store'])->name('eleves.store');
    Route::get('eleves/{eleve}', [EleveController::class, 'show'])->name('eleves.show');
    Route::get('eleves/{eleve}/edit', [EleveController::class, 'edit'])->name('eleves.edit');
    Route::put('eleves/{eleve}', [EleveController::class, 'update'])->name('eleves.update');
    Route::delete('eleves/{eleve}', [EleveController::class, 'destroy'])->name('eleves.destroy');
});



require __DIR__ . '/auth.php';
