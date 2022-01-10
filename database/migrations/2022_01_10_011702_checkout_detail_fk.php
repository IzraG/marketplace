<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CheckoutDetailFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkout_details', function (Blueprint $table) {

            $table->foreign("product_id")->references("product_id")->on("products")->onDelete("cascade")->onUpdate("cascade");
            $table->foreign("id_checkout")->references("id_checkout")->on("checkouts")->onDelete("cascade")->onUpdate("cascade");

        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkout_details', function (Blueprint $table) {


        });
        //
    }
}
