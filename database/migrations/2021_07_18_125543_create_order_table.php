<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function(Blueprint $t){
            $t->id();
            $t->string('order_number', 20)->unique();
            $t->foreignId('member_id')->constrained('member');
            $t->integer('total_price')->unsigned();
            $t->string('recipient_name', 60);
            $t->string('recipient_phone', 14);
            $t->string('recipient_address', 160);
            $t->string('region_code', 20);
            $t->foreign('region_code')->references('code')->on('region');
            $t->string('order_status', 20)->default('UNPAID'); // UNPAID, PAID, CANCEL_BY_MEMBER, CANCEL_BY_ADMIN, CANCEL_BY_SYSTEM
            $t->string('account_name', 60)->nullable();
            $t->string('account_number', 30)->nullable();
            $t->string('bank_account_name', 20)->nullable();
            $t->integer('paid_amount')->nullable();
            $t->date('transfer_date')->nullable();
            $t->string('transfer_file', 100)->nullable();
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
        Schema::dropIfExists('order');
    }
}
