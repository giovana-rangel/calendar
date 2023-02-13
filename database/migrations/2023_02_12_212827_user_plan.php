<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserPlan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->unsignedBigInteger('next_user_plan_id')->nullable();
            $table->dateTime('start_timestamp')->nullable();
            $table->dateTime('end_timestamp')->nullable();
            $table->dateTime('renewal_timestamp')->nullable();
            $table->float('renewal_price')->nullable();
            $table->integer('requires_invoice')->nullable();
            $table->integer('status')->nullable();
            $table->integer('financiation')->nullable();
            $table->integer('status_financiation')->nullable();
            $table->string('language')->nullable();
            $table->string('nif')->nullable();
            $table->string('business_name')->nullable();
            $table->integer('pending_payment')->nullable();
            $table->timestamp('date_max_payment')->nullable();
            $table->timestamp('proxim_start_timestamp')->nullable();
            $table->timestamp('proxim_end_timestamp')->nullable();
            $table->timestamp('proxim_renewal_timestamp')->nullable();
            $table->integer('proxim_renewal_price')->nullable();
            $table->float('credits_return')->nullable();
            $table->unsignedBigInteger('company_id')->nullable(); 
            $table->integer('cancel_employee')->nullable();
            $table->integer('force_renovation')->nullable();
            $table->timestamp('date_canceled')->nullable();
            $table->float('amount_confirm_canceled')->nullable();
            $table->float('credit_confirm_canceled')->nullable();
            $table->unsignedBigInteger('cost_center_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
