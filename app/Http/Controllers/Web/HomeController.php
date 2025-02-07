<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Http;

class HomeController
{

    public function home(){
        $response = Http::get(url('/api/v1/category'));
        $categories = $response->successful() ? $response->json()['data'] : [];
        return view('web.dynamic.home', compact('categories'));
    }

}
