<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller
{
    public function insertform(){
        return view('klassen/stud_create');
    }

    public function insert(Request $request){
        $klassen_naam = $request->input('klas_naam');
        $data=array("klas_naam"=>$klassen_naam);
        DB::table('klassen')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add-klas">Click Here</a> to go back.';
    }
}