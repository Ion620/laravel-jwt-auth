<?php

namespace App\Http\Controllers;
use App\Repositories\AuthRepository;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;


class AuthController extends Controller
{
    protected $authRepository;
    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function login(Request $request){
        return $this->authRepository->login($request);
    }
    public function register(Request $request) {
        return $this->authRepository->register($request);
    }
    public function logout() {
        return $this->authRepository->logout();
    }
    public function refresh() {
        return $this->authRepository->refresh();
    }
    public function userProfile() {
        return $this->authRepository->userProfile();
    }

}
