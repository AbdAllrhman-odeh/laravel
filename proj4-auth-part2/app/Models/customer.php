<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class customer extends User
{
    use HasFactory;
    public $table="customers";
    protected $fillable=[
        'email','password'
    ];
    protected $hidden="";
    public $timestamps=false;
}
