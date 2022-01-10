<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutHeader extends Model
{
    protected $table ="checkouts";
    protected $primaryKey = "id_checkout";

    protected $dates =[
        'checkout_date'  => 'date:Y-m-d',
    ];

    static function tambah_checkout(){
        $data= CheckoutHeader::create([
            "checkout_date"-> date("Y-m-d"),
        ]);

        return $data->id_checkout;
    }


}
