<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use function Pest\Laravel\json;

class StaticPageController
{

    public function contact()
    {
        return view('web.static.contact');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            try {
                $response = Http::post(env('APP_URL') . '/api/v1/login', $credentials);
                $data = $response->json();

                if ($response->successful() && isset($data['success']) && $data['success']) {
                    Auth::loginUsingId($data['user']['id']);
                    session(['api_token' => $data['token']]);
                    session(['user' => $data['user']]);
                    session()->save();

                    return response()->json([
                        'success' => true,
                        'message' => 'You are logged in',
                        'data' => []
                    ]);
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Login failed!',
                        'data' => $data['message']
                    ]);
                }
            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Something went wrong!',
                    'data' => $e->getMessage()
                ]);
            }
        }

        return view('web.static.auth.login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->only('email', 'password','confirm_password', 'age', 'role');
            $response = Http::post(env('APP_URL') . '/api/v1/register', $data);

            return $response->json();
        }

        return view('web.static.auth.register');
    }

    public function logout()
    {
        Session::forget(['api_token', 'user']);

        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
