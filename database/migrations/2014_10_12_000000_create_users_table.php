<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('user_user_id')->nullable(); //追加
            $table->string('user_tel')->nullable(); //追加
            $table->integer('user_age')->nullable(); //追加
            $table->string('user_birth')->nullable(); //追加
            $table->string('user_sex')->nullable(); //追加
            $table->string('user_area')->nullable(); //追加
            $table->string('user_address')->nullable(); //追加
            $table->string('user_job')->nullable(); //追加
            $table->string('friend')->nullable(); //追加
            $table->text('character_p')->nullable(); //追加
            $table->text('character_m')->nullable(); //追加
            $table->text('lt_short')->nullable(); //追加
            $table->text('lt')->nullable(); //追加
            $table->text('hobby')->nullable(); //追加
            $table->string('meeting')->nullable(); //追加
            $table->string('user_photo_main')->nullable(); //追加
            $table->string('user_photo_sub')->nullable(); //追加
            $table->string('user_photo_id')->nullable(); //追加
            $table->string('status')->nullable(); //追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
