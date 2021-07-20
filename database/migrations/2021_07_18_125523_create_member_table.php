<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function(Blueprint $t){
            $t->id();
            $t->string('member_no', 16)->unique();
            $t->string('name', 80);
            $t->string('email', 80);
            $t->string('password', 160);
            $t->string('phone', 14)->nullable();
            $t->string('photo', 160)->nullable();
            $t->integer('is_blocked', 1)->default(0)->autoIncrement(0);
            $t->string('activation_token')->nullable();
            $t->dateTime('activated_at')->nullable();
            $t->string('forgot_password_token')->nullable();
            $t->rememberToken();
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
        Schema::dropIfExists('member');
    }
}
