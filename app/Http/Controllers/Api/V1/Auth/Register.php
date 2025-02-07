<?php

namespace App\Http\Controllers\Api\V1\Auth;


use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Traits\Api\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class Register
{
    use ApiResponse;

    public function register(RegisterRequest $request):JsonResponse
    {

        $validatedData = $request->validated();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        if (isset($validatedData['role']) || $validatedData['role'] == 'seller') {
            $user->assignRole('seller');
        }else{
            $user->assignRole('user');
        }

        return $this->sendResponse($user, 'User registered successfully.');
    }
}
