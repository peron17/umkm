<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function(Blueprint $t){
            $t->id();
            $t->foreignId('product_id')->constrained('product');
            $t->foreignId('member_id')->constrained('member');
            $t->integer('price')->unsigned();
            $t->integer('qty')->unsigned();
            $t->integer('total_price')->unsigned();
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
