<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function(Blueprint $t){
            $t->id();
            $t->string('sku', 30)->unique();
            $t->string('name', 100);
            $t->string('slug', 100)->unique();
            $t->string('photo', 80)->nullable();
            $t->integer('price')->unsigned();
            $t->float('discount');
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
        Schema::dropIfExists('product');
    }
}
