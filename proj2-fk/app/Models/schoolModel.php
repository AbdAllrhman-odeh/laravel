<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolModel extends Model
{
    use HasFactory;

    public $table="user";
    protected $fillable=[
        "id",'user_id'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
}
