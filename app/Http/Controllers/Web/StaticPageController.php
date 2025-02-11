<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

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
                    Session::put('api_token', $data['token']);
                    Session::put('user', $data['user']);
                    return redirect()->route('dashboard')->with('success', 'Login successful!');
                } else {
                    return back()->with('error', $data['message'] ?? 'Login failed!');
                }
            } catch (\Exception $e) {
                return back()->with('error', 'Something went wrong! ' . $e->getMessage());
            }
        }

        return view('web.static.auth.login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->safe();

            if (Auth::attempt($credentials, $request->remember)) {
                return response()->json([
                    'success' => true,
                    'redirect_url' => route('dashboard')
                ]);
            }

            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password.'
            ]);
        }

        return view('web.static.auth.register');
    }

    public function logout()
    {
        Session::forget(['api_token', 'user']);

        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }
}
