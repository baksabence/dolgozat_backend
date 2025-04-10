<?php

namespace App\Http\Controllers;

use App\Models\teszt;
use Illuminate\Http\Request;

class tesztController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tesztek()
    {
        $tesztek = teszt::all();
        return response()->json($tesztek);
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
    public function show(string $id)
    {
        $tesztek = teszt::where('kategoriaId', $id)->get();
        return response()->json($tesztek);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
