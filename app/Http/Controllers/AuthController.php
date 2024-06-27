<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\AuthRequest;


class AuthController extends Controller
{
    public function __construct(protected UserService $service) {

    }

    public function login(AuthRequest $request) {
        $payload = $request->validated();
        $username = $payload["username"];
        $password = $payload["password"];
        $user = $this->service->getByUsername($username);
        // dd($user);

      
        if (!$token = auth()->attempt($payload)) 
        {
            dd($token);
            return $this->response(null,"gagal login","error",400);
        }
        return $this->response($token);
    }
}
