<?php

namespace App\Http\Controllers;

use App\Models\Opdracht;
use App\Models\Answer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OpdrachtenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $opdrachten = Opdracht::all();

        return view('student/studentOpdrachten',compact('opdrachten'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function insert(Request $request){
        $newOpdracht = new Opdracht();
        $newOpdracht->opdracht_naam = $request->input('opdracht_naam');
        $newOpdracht->opdracht_beschrijving = $request->input('opdracht_beschrijving');
        $newOpdracht->opdracht_type = "opdracht"; //dit is tijdelijk, wil eerst opdrachtvragen maken zonder verschillende types
        $newOpdracht->user_id = Auth()->user()->id;
    
        // Check if the record already exists
        $opdracht = Opdracht::where('opdracht_naam', $newOpdracht->opdracht_naam)->first();
    
        // If the record exists, you can choose to update it or do nothing
        if ($opdracht) {
            // Record already exists, you can handle this case as needed
            // For example, return an error message or redirect back with a message
            return redirect()->back()->with('error', 'Opdracht with this name already exists.');
        } else {
            // Record doesn't exist, insert a new one
            $newOpdracht->save();
    
            // You can also redirect back with a success message
            return redirect()->to('/studentOpdrachten');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('opdrachten/opdrachtenDocent');
    }

    public function createAnswer($opdracht_id)
    {
        $opdracht = Opdracht::find($opdracht_id);
        return view('opdrachten.createAnswer')->with('opdracht',$opdracht);
    }

    public function storeAnswer(Request $request, $opdracht_id)
    {   
        $opdracht = Opdracht::find($opdracht_id);
        //make model for answer instead of opdracht
        $newAnswer=new Answer();
        $newAnswer->opdracht_id = $opdracht->id;
        $newAnswer->opdracht_answer = $request->get('answer');
        $newAnswer->user_id = Auth()->user()->id;
        $newAnswer->save();

        return view('docent/docentDashboard')->with('success','Answer submitted successfully');
    }

    public function addQuestion($opdracht_id){
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Opdrachten $opdrachten)
    {
        { 
            return view('/Opdracht');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Opdracht $opdracht)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Opdracht $opdracht)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Opdracht $opdracht)
    {
        //
    }
}
