<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    public $timestamps = false;
    protected $fillable = [
		"user_plan_id",
		"route_id",
		"track_id",
		"reservation_start",
		"reservation_end",
		"route_stop_origin_id",
		"route_stop_destination_id",
		"created_at",
		"updated_at",
		"deleted_at"
    ];
}
