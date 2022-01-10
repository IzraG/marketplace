<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class AccountController extends Controller
{
    public function index(){
        if (Auth::check()){
            $cart = Cart::All()->where('users_id', auth()->user()->id);
            $incart = $cart->count();
        }
        else{
            $incart = 0;
        }
        return view('/account',
            [
                "title" => "Akun saya",
                "incart" => $incart,
                "accounts" => auth()->user()
            ]
        );
    }
}
