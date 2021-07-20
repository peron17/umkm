<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function(Blueprint $t){
            $t->id();
            $t->foreignId('order_id')->constrained('order');
            $t->foreignId('product_id')->constrained('product');
            $t->integer('price')->unsigned();
            $t->integer('qty')->unsigned();
            $t->integer('total_price')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_item');
    }
}
