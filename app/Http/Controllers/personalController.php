<?php

namespace App\Http\Controllers;



use App\Models\personal;
use Illuminate\Http\Request;

class personalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = personal::orderBy('description')->get();
        return view('dashboard.personal.index')->with('data', $data);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = personal::where('id', $id)->first();
        return view('dashboard.personal.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'description'=>$request->description
        ];
        personal::where('id', $id)->update($data);

        return redirect()->route('personal.index')->with('success', 'Success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}