<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Services extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('external_id')->nullable();
            $table->unsignedBigInteger('external_budget_id')->nullable();
            $table->unsignedBigInteger('external_route_id')->nullable();
            $table->unsignedBigInteger('track_id')->nullable();
            $table->string('name');
            $table->string('notes')->nullable();
            $table->string('arrival_address');
            $table->dateTime('arrival_timestamps');
            $table->string('departure_address')->nullable();
            $table->dateTime('departure_timestamps')->nullable();
            $table->integer('capacity')->default(0)->change();
            $table->integer('confirmed_pax_count')->nullable();
            $table->dateTime('reported_departure_timestamp')->nullable();
            $table->float('reported_departure_kms')->nullable();
            $table->dateTime('reported_arrival_timestamp')->nullable();
            $table->float('reported_arrival_kms')->nullable();
            $table->string('reported_vehicle_plate_number')->nullable();
            $table->string('status')->default(0)->change();
            $table->string('status_info')->nullable();
            $table->integer('reprocess_status')->nullable();
            $table->integer('return')->default(0)->change();
            $table->string('synchronized_downstream')->nullable();
            $table->string('synchronized_upstream')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('sale_tickets_drivers')->nullable();
            $table->string('notes_drivers')->nullable();
            $table->text('itinerary_drivers')->nullable();
            $table->float('cost_if_externalized')->nullable();
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
        //
    }
}
