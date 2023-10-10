<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InsertRoleController extends Controller
{
    public function insertform(){
        return view('docent/dashboardDocent');
    }

    //insert the teacher role to the user table
    public function insert(Request $request){
        $role = '';
        $data=array("role"=>$role);
        DB::table('users')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/add-klas">Click Here</a> to go back.';
    }
}
