<?php
 
namespace App\Http\Controllers\OpdrachtCreate;
 
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
        $opdrachten = DB::select('select * from Opdrachten');
        return view('docent/opdrachten_view',['opdrachten'=>$opdrachten]);
        }
}