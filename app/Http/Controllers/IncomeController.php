<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Services\IncomeService;
use Illuminate\Http\Request;
use App\Http\Requests\IncomeRequest;

class IncomeController extends Controller
{
    public function __construct(protected IncomeService $service)
    {
        
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all()->toArray();
        // return response()->json($data, 200);
        return $this->response($data, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IncomeRequest $request)
    {
        // dd(1);
        $payload = $request->validated();
        // dd($payload);
        $data = $this->service->create($payload);
        // return response()->json($data, 201);
        return resopnse () -> json ([ 
            'status'=>"succes",
            'message'=>"sucesfully",
            'data' => $data
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $data = $this->service->show($id);
        return response()->json($data, 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $data = $this->service->delete($id);
        return response()->json($data, 200);
    }
}
