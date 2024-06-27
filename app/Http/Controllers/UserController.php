<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService; // Pastikan ini mengarah ke namespace yang benar
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest; // Pastikan ini mengarah ke namespace yang benar

class UserController extends Controller
{   
    protected $service;

    public function __construct(UserService $service) {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->service->all()->toArray();
        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Code to show form for creating a new user
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $payload = $request->validated();
        $data = $this->service->create($payload);
        return response()->json($data, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = $this->service->show($id);
        return response()->json($data, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Code to show form for editing user with $id
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $payload = $request->validated();
        $data = $this->service->update($id, $payload);
        return response()->json($data, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = $this->service->delete($id);
        return response()->json($data, 200);
    }
}
