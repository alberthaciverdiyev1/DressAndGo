<?php

namespace App\Http\Controllers\Web;

class ShopController
{

    public function shop(){
        return view('web.dynamic.shop.list');
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
