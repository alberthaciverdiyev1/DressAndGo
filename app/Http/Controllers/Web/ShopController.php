<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Http;

class ShopController
{

    public function shop()
    {
        $response = Http::get(url('/api/v1/brand'));
        $brands = $response->successful() ? $response->json()['data'] : [];
        $response = Http::get(url('/api/v1/category'));
        $categories = $response->successful() ? $response->json()['data'] : [];
        $response = Http::get(url('/api/v1/color'));
        $colors = $response->successful() ? $response->json()['data'] : [];
        $response = Http::get(url('/api/v1/shop'));
        $products = $response->successful() ? $response->json()['data'] : [];
        return view('web.dynamic.rent.list', compact(['brands', 'categories', 'colors','products']));
    }

    public function details($id)
    {
        $response = Http::get(url("/api/v1/shop/{$id}"));
        $product = $response->successful() ? $response->json()['data'] : [];
        return view('web.dynamic.rent.details', compact(['product']));
    }

    public function cart()
    {
        return view('web.dynamic.rent.cart');
    }

    public function checkout()
    {
        return view('web.dynamic.rent.checkout');
    }

    public function wishlist()
    {
        return view('web.dynamic.rent.wishlist');
    }

}
