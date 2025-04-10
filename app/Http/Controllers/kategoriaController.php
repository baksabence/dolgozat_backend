<?php

namespace App\Http\Controllers;

use App\Models\kategoria;
use Illuminate\Http\Request;

class kategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategorias = kategoria::all();
        return response()->json($kategorias);
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
        //
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
