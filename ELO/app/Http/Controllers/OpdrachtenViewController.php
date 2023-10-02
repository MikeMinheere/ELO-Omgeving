<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
 
class OpdrachtenViewController extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        $Opdrachten = DB::select('select * from Opdrachten');
        return view('opdrachten/opdrachten_view',['opdrachten'=>$opdrachten]);
        }
}