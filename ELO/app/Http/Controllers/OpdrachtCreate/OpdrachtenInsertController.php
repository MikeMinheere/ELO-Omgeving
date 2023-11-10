<?php

namespace App\Http\Controllers\OpdrachtCreate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class opdrachtenInsertController extends Controller
{
    public function insertform(){
        return view('opdrachten/opdrachtenDocent');
    }

    public function insert(Request $request){
        $opdrachten_naam = $request->input('opdracht_naam');
        $opdracht_beschrijving = $request->input('opdracht_beschrijving');
        $opdracht_type = $request->input('opdracht_type');
    
        // Check if the record already exists
        $opdracht = DB::table('opdrachten')->where('opdracht_naam', $opdrachten_naam)->first();
    
        // If the record exists, you can choose to update it or do nothing
        if ($opdracht) {
            // Record already exists, you can handle this case as needed
            // For example, return an error message or redirect back with a message
            return redirect()->back()->with('error', 'Opdracht with this name already exists.');
        } else {
            // Record doesn't exist, insert a new one
            $data = array("opdracht_naam" => $opdrachten_naam, "opdracht_beschrijving" => $opdracht_beschrijving, "opdracht_type" => $opdracht_type);
            DB::table('opdrachten')->insert($data);
    
            // You can also redirect back with a success message
            return redirect()->to('/studentOpdrachten');
        }
    }
}