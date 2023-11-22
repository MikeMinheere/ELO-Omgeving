<?php

namespace App\Http\Controllers;

use App\Models\Opdracht;
use Illuminate\Http\Request;

class OpdrachtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $opdrachten = Opdracht::latest()->paginate(10);

        return view('student/studentOpdrachten',compact('opdrachten'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Opdracht $opdracht)
    {
        //
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
