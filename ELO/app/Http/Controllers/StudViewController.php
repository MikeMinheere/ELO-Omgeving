<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
 
class StudViewController extends Controller
{
    /**
     * Show a list of all of the application's klassen.
     */
    public function index(): View
    {
        $klassen = DB::select('select * from klassen');
        return view('klassen/stud_view',['klassen'=>$klassen]);
        }
}