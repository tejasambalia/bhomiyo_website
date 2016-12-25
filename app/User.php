<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'relation', 'first_name', 'middle_name', 'last_name', 'date_of_birth', 'contact', 'mail_id', 'education', 'occupation', 'home_town', 'married_status', 'gender',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $add_records_validation_rules = [
        'relation' => 'required',
        'first_name' => 'required',
        'middle_name' => 'required',
        'last_name' => 'required',
        'date_of_birth' => 'required',
        'contact' => 'required',
        'mail_id' => 'email',
        'education' => 'required',
        'occupation' => 'required',
        'home_town' => 'required',
        //'gender' => 'required',
    ];
}
