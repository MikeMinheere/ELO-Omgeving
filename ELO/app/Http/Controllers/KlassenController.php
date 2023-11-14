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

        $klassen = Klassen::all();
        $student = Klassen::withCount('users')->get(); 
        $i = 0;

        return view('klassen.index',compact('klassen'),compact('student'),compact('i'))->with('i', $i);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Klassen $klassen)
    {
        return view('klassen.create',compact('klassen'));
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
        $students = User::all();
        return view('klassen.edit',compact('klassen'),compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Klassen  $klas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klassen $klassen, User $users)
    {
        $students = User::all();



        $request->validate([
            'class_name' => 'required',

        ]);

        foreach ($students as $student) {
            if (in_array($student->id , $request->get('user'))) {
                // Perform actions or logic for checked checkbox
                $klasnaam = $klassen->class_name;
                if($klassen->class_name == 'Docenten' ){
                    $role = 'teacher';

                } else {
                    $role = 'student';
                }
            } else {
                // Perform actions or logic for unchecked checkbox
                if($student->class_name == $klassen->class_name ){
                    $klasnaam = 'Geen klas';
                } else {
                    $klasnaam = $student->class_name;
                } 
                if($klasnaam !== 'Docenten' ){
                    $role = 'student';
                } else {
                    $role = 'teacher';
                }
            }
            $student->fill([
                'id' => $student->id,
                'class_name' => $klasnaam,
                'role' => $role
            ]);

            $student->save();
        }
    
        $klassen->update($request->all());
    
        return redirect()->route('klassen.index')
                        ->with('success','Class updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Klassen $klassen)
    {
        $students = Klassen::find($klassen->id)->users;

        foreach ($students as $student) {

            $klasnaam = 'Geen klas';

            $student->fill([
                'id' => $student->id,
                'class_name' => $klasnaam
            ]);

            $student->save();
        }
        $klassen->delete();
    
        return redirect()->route('klassen.index')
                        ->with('success','Class deleted successfully');
    }
}
