<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use App\Services\OutcomeService;
use Illuminate\Http\Request;
use App\Http\Requests\OutcomeRequest;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //list semua data
        $payload = Outcome::all();
        return response ()-> json($payload);
        return $this -> response($data,'sukses menampilkan data');
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
        $payload = $request->all();
        $data = Outcome::create($payload); 
        return $this -> response($data,'sukses membuat data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Outcome $outcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Outcome $outcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Outcome $outcome,$id)
    {
        //update data
        $data = Outcome::findOrFail($id);
        $outcome->update($request->all());
        return $this -> response($data,'sukses membuat data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Outcome $outcome, $id)
    {
        //delete data
        $outcome = Outcome::findOrFail($id);
        $outcome->delete();
        return response()->json([ $data,'Outcome deleted successfully']);
    }
}
