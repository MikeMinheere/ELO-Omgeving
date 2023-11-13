<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlassenController;
use App\Models\Klassen;

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


Route::get('/opdrachtenDocent', function () {
    return view('docent/opdrachtenDocent');
});

Route::get('/dashboardDocent', function () {
    return view('docent/dashboardDocent');
})->middleware('teacher');

Route::get('/studentDashboard', function () {
    return view('student/studentDashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('add-Opdracht','App\Http\Controllers\OpdrachtCreate\OpdrachtenInsertController@insertform');
Route::post('createOpdracht','App\Http\Controllers\OpdrachtCreate\OpdrachtenInsertController@insert');
Route::post('createOpdrachtText','App\Http\Controllers\OpdrachtCreate\OpdrachtenInsertController@insert');
Route::post('createOpdrachtToets','App\Http\Controllers\OpdrachtCreate\OpdrachtenInsertController@insert');
Route::get('view-Opdracht','App\Http\Controllers\OpdrachtCreate\OpdrachtenView Controller@index');


Route::resource('klassen', KlassenController::class)->middleware('teacher');

require __DIR__.'/auth.php';
