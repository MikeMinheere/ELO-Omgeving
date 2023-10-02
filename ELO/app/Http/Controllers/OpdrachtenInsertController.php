<?php

namespace App\Http\Controllers;

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
        $opdrachten_naam = $request->input('name');
        $data=array("name"=>$opdrachten_naam);
        DB::table('opdrachten')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add-opdrachten">Click Here</a> to go back.';
    }
}