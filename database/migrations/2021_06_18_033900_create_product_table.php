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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->integer('hpp')->nullable();
            $table->integer('selling_price');
            $table->string('photo')->nullable();
            $table->foreignId('brand_id')->references('id')->on('brand')->onUpdate('cascade');
            $table->foreignId('category_id')->references('id')->on('category')->onUpdate('cascade');
            $table->timestamps();
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
