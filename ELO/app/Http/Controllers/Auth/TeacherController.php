<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        Route::get('/dashboardDocent', function () {
            return view('docent/dashboardDocent');
        });
    }
}
