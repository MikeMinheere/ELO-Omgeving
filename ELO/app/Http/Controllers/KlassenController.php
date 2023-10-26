<?php

namespace App\Http\Controllers;

use App\Models\Klassen;
use App\Models\User;
use Illuminate\Http\Request;

class KlassenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $klassen = Klassen::latest()->paginate(5);
        $students = Klassen::find(1)->users->count();

        return view('klassen.index',compact('klassen'),compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('klassen.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
            
        ]);
    
        Klassen::create($request->all());
     
        return redirect()->route('klassen.index')
                        ->with('success','Class created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Klassen $klassen)
    {
        { 
            $students = Klassen::find($klassen->id)->users;
            return view('klassen.show',compact('klassen'),compact('students'));
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Klassen  $klassen
     * @return \Illuminate\Http\Response
     */
    public function edit(Klassen $klassen)
    {
        return view('klassen.edit',compact('klassen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Klassen  $klas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klassen $klassen)
    {
        $students = Klassen::find($klassen->id)->users;

        $request->validate([
            'class_name' => 'required',
        ]);
    
        $klassen->update($request->all());
    
        return redirect()->route('klassen.index')
                        ->with('success','Class updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Klassen $klassen)
    {
        $klassen->delete();
    
        return redirect()->route('klassen.index')
                        ->with('success','Class deleted successfully');
    }
}
