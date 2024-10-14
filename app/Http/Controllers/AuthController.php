<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login');
    }

    public function regis() {
        return view('auth.register');
    }

    public function checkout() {
        return view('pages.checkout');
    }

    public function bayar() {
        return view('pages.bayar');
    }
}
