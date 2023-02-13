<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_plan_id');
            $table->unsignedBigInteger('route_id'); 
            $table->unsignedBigInteger('track_id')->nullable(); 
            $table->unsignedBigInteger('route_stop_origin_id')->nullable(); 
            $table->unsignedBigInteger('route_stop_destination_id')->nullable(); 
            $table->dateTime('reservation_start')->nullable();
            $table->dateTime('reservation_end')->nullable();
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();

            $table->foreign('user_plan_id')
                ->references('id')
                ->on('user_plans')
                ->onDelete('cascade');
            
            $table->foreign('route_id')
                ->references('id')
                ->on('routes')
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
