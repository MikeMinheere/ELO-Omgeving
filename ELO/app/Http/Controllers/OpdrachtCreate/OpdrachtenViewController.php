<?php
 
namespace App\Http\Controllers\OpdrachtCreate;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\Opdracht;
use Illuminate\Http\Request;


class OpdrachtenViewController extends Controller
{
    /**
     * Show a list of all of the application's opdrachten.
     */
    public function index(): View
    {
        $opdrachten = Opdrachten::latest()->paginate(100);
        return view('student.studentOpdrachten',compact('opdrachten'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }
}