<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlassenController;
use App\Models\Klassen;
use App\Http\Controllers\OpdrachtenController;
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
})->name('docent.createAssignment');


Route::get('/docentDashboard', function () {
    return view('docent/docentDashboard');
})->middleware('teacher')->name('docent.dashboard');

Route::get('/studentDashboard', function () {
    return view('student/studentDashboard');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
# Routes voor de opdrachten aanmaken / view
Route::get('add-Opdracht','App\Http\Controllers\OpdrachtenController@create');
Route::post('createOpdracht','App\Http\Controllers\OpdrachtenController@insert');
Route::post('add-question','App\Http\Controllers\OpdrachtenController@addQuestion');
Route::get('view-Opdracht','App\Http\Controllers\OpdrachtenController@index');


Route::resource('klassen', KlassenController::class)->middleware('teacher');

//Route::resource('opdrachten', OpdrachtenController::class);


Route::get('/test', function () {
    return view('test');
});
Route::post('file-upload', [UploadController::class, 'FileUpload' ])->name('FileUpload');



Route::resource('studentOpdrachten', OpdrachtenController::class);
Route::get('/student/opdrachten', [OpdrachtenController::class, 'index'])->name('opdracht.index');
Route::get('/student/opdracht/{opdracht_id}', [OpdrachtenController::class, 'createAnswer'])->name('opdracht.createAnswer');
Route::post('/student/opdracht/{opdracht_id}', [OpdrachtenController::class, 'storeAnswer'])->name('opdracht.storeAnswer');

require __DIR__.'/auth.php';
