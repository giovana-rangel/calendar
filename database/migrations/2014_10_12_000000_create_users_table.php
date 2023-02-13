<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->string('phone_number')->nullable();
            $table->string('picture')->nullable();
            $table->string('remember_token')->nullable();
            $table->timestamp('last_online')->nullable();
            $table->string('verification_code')->nullable();
            $table->integer('status')->nullable();
            $table->integer('first')->nullable();
            $table->string('company_contact')->nullable();
            $table->float('credits')->nullable();
            $table->boolean('first_trip')->nullable();
            $table->boolean('incomplete_profile')->nullable();
            $table->boolean('phone_verify')->nullable();
            $table->string('token_auto_login')->nullable();
            $table->string('user_vertical')->nullable();
            $table->unsignedBigInteger('language_id')->nullable();
            $table->boolean('no_registered')->nullable();
            $table->string('email')->unique();
            $table->string('new_email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('last_accept_date')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
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
}
