<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;

    public $table="user";
    protected $fillable=[
        "id",'school_id'
    ];
    protected $hidden=[
        'created_at','updated_at'
    ];
}
