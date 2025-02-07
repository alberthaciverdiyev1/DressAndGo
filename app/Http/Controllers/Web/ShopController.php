<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Http;

class ShopController
{

    public function shop(){
        $response = Http::get(url('/api/v1/brand'));
        $brands = $response->successful() ? $response->json()['data'] : [];
        $response = Http::get(url('/api/v1/category'));
        $categories = $response->successful() ? $response->json()['data'] : [];
        return view('web.dynamic.shop.list',compact(['brands','categories']));
    }
    public function details(){
        return view('web.dynamic.shop.details');
    }
    public function cart(){
        return view('web.dynamic.shop.cart');
    }

    public function checkout(){
        return view('web.dynamic.shop.checkout');
    }
    public function wishlist(){
        return view('web.dynamic.shop.wishlist');
    }

}
