<?php

namespace App\Http\Controllers;

use App\Models\Dosen2;
use Illuminate\Http\Request;

class Dosen2Controller extends Controller
{
    //
    public function index()
    {
        $dosen2 = Dosen2 :: all();
        return view('dosen2' ,
        [
            'dosen2' => $dosen2
        ]);
    }

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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
