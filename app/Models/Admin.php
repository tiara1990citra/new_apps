<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable 
{
    protected $primarykey = 'id_admin'
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable=[
        'username',
        'password',
        'role'
    ];

    protected $hidden=[
        'password',
    ];
    

}
