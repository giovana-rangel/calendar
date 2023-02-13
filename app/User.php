<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'new_email', 'password', 'phone_number', 'picture',
        'last_online', 'verification_code', 'status', 'first', 'company_contact', 'remember_token',
        'credits', 'first_trip', 'incomplete_profile', 'phone_verify', 'token_auto_login',
        'user_vertical', 'language_id', 'no_registered', 'last_accept_date', 'deleted_at', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'token_auto_login'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
