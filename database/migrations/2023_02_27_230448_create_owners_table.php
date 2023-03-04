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
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->string('owner_user_id')->nullable();//追加・本当はNULLじゃない方がいい↓
            $table->string('owner_tel')->nullable(); //追加
            $table->integer('owner_age')->nullable(); //追加
            $table->string('owner_birth')->nullable(); //追加
            $table->string('owner_sex')->nullable(); //追加
            $table->string('owner_area')->nullable(); //追加
            $table->string('owner_address')->nullable(); //追加
            $table->string('owner_job')->nullable(); //追加
            $table->string('owner_photo_main')->nullable();//追加
            $table->string('owner_photo_id')->nullable();//追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
};
