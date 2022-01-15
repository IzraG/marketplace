<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutDetail extends Model
{
    protected $table ="checkout_details";
    protected $primaryKey = "id_checkout_detail";

    protected $fillable =[

        'id_checkout','product_id','total'


    ];

    static function tambah_checkout_detail($product_id,$id_checkout,$total){
        CheckoutDetail::create([

            "product_id"->$product_id,
            "id_cart"->$id_checkout,
            "total"->$total,

        ]);
    }
}
