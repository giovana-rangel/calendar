<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $table = 'routes';
    public $timestamps = false;
    protected $fillable = [
        'external_id',
        'invitation_code',
        'title',
        'start',
        'end'
    ];
}
