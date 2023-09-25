<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\EvaluationEleveController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('eleves', EleveController::class);

Route::resource('modules', ModuleController::class);

Route::resource('evaluations', EvaluationController::class);

Route::resource('notes', NoteController::class);

Route::resource('evaluation_eleves', EvaluationEleveController::class);