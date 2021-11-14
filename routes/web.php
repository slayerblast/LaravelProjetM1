<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FormationController;
use \App\Http\Controllers\ChapitreController;

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



Route::get('/', [FormationController::class, 'index'])->name('formationList');
Route::get('/formations/ajouter', [FormationController::class, 'add'])->name('formationAdd');
Route::post('/formations/ajouter', [FormationController::class, 'store'])->name('formationStore');
Route::get('/formations/{id}', [FormationController::class, 'details'])->name('formationDetails');
Route::put('/formations/{id}/modifier', [FormationController::class, 'update'])->name('formationUpdate');
Route::put('/formations/{id}/modifier/image', [FormationController::class, 'updatePicture'])->name('formationUpdatePicture');
Route::delete('/formations/{id}/supprimer', [FormationController::class, 'delete'])->name('formationDelete');


Route::post('/chapitres/{formationId}',[ChapitreController::class,'store'])->name('chapitreAdd');
Route::delete('/chapitres/{id}',[ChapitreController::class,'delete'])->name('chapitreDelete');