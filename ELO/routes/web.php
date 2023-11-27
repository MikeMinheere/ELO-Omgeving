<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlassenController;
use App\Models\Klassen;
use App\Http\Controllers\OpdrachtController;
use app\Http\Controllers\OpdrachtCreate\OpdrachtenViewController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\UploadController;


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


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/opdracht', function () {
    return view('opdracht');
});
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/opdrachtenDocent', function () {
    return view('docent/opdrachtenDocent');
});

Route::get('/docentOpdrachtCreate', function () {
    return view('docent/docentOpdrachtCreate');
});

Route::get('/docentDashboard', function () {
    return view('docent/docentDashboard');
})->middleware('teacher');

Route::get('/studentDashboard', function () {
    return view('student/studentDashboard');
});

Route::get('/studentOpdrachten', function () {
    return view('student/studentOpdrachten');
});

Route::resource('studentOpdrachten', OpdrachtController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
# Routes voor de opdrachten aanmaken / view
Route::get('add-Opdracht','App\Http\Controllers\OpdrachtCreate\OpdrachtenInsertController@insertform');
Route::post('createOpdracht','App\Http\Controllers\OpdrachtCreate\OpdrachtenInsertController@insert');
Route::post('createOpdrachtText','App\Http\Controllers\OpdrachtCreate\OpdrachtenInsertController@insert');
Route::post('createOpdrachtToets','App\Http\Controllers\OpdrachtCreate\OpdrachtenInsertController@insert');

Route::get('view-Opdracht','App\Http\Controllers\OpdrachtCreate\OpdrachtenViewController@index');


Route::resource('klassen', KlassenController::class)->middleware('teacher');


Route::get('/test', function () {
    return view('test');
});
Route::post('file-upload', [UploadController::class, 'FileUpload' ])->name('FileUpload');


require __DIR__.'/auth.php';
