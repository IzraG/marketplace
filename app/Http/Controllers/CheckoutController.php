<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\CheckoutHeader;

class CheckoutController extends Controller
{
    public function index(){
        $cart = Cart::All()->where('users_id', auth()->user()->id);
        $incart = $cart->count();
        return view('checkout', 
        ["title"=> "Pembayaran",
        "incart"=>$incart
        ]
    );
    }

    function buy(){
        
        
        $cart = Cart::All()->where('users_id', auth()->user()->id);
        $id_checkout = CheckoutHeader::tambah_checkout();
        foreach($cart as $ct=> $val){
            $id_item=$ct;
     
            $total=$val["total"];
            CheckoutDetail::tambah_checkout_detail($id_item,$id_checkout,$total);
        }
        return redirect("/");
    }
}
