<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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



Route::get('/klassen', function () {
    return view('klassen');
});

Route::get('/teacherRegister', function () {
    return view('auth/register-teacher');
});

Route::get('/teacherLogin', function () {
    return view('auth/login-teacher');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('add-klas','App\Http\Controllers\StudInsertController@insertform');
Route::post('create','App\Http\Controllers\StudInsertController@insert');
Route::get('view-klas','App\Http\Controllers\StudViewController@index');

require __DIR__.'/auth.php';
