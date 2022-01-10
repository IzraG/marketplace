<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckoutDetail extends Model
{
    protected $table ="checkout_details";
    protected $primaryKey = "id_checkout_detail";

    protected $fillable =[
        'id_checkout','products_id','total'
    ];

    static function tambah_checkout_detail($product_id,$id_checkout,$total){
        CheckoutDetail::create([
            "products_id"=>$product_id,
            "id_checkout"=>$id_checkout,
            "total"=>$total,
        ]);
    }
}
