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
        $data=array("opdracht_naam"=>$opdrachten_naam, "opdracht_beschrijving"=>$opdracht_beschrijving);
        DB::table('opdrachten')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add-opdrachten">Click Here</a> to go back.';
    }
}