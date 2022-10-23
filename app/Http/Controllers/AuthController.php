<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;

class AuthController extends Controller
{

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function login(Request $request)
    {
        $auth = $this->authService->login($request);
        return $auth;
    }

    public function register(Request $request)
    {
        $auth = $this->authService->register($request);
        return $auth;
    }

    public function logout()
    {
        $auth = $this->authService->logout();
        return $auth;
    }

    public function refresh()
    {
        $auth = $this->authService->refresh();
        return $auth;
    }
}
