<?php

namespace App\Http\Controllers\Web;

class StaticPageController
{

    public function contact(){
        return view('web.static.contact');
    }

    public function login(){
        return view('web.static.auth.login');
    }
    public function register(){
        return view('web.static.auth.register');
    }
}
