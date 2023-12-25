<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class theatreModel extends Model
{
    use HasFactory;
    public $table="theatre";

    protected $fillable=[
        'id','movieName','movieDescription','movieGener' 
    ];

    protected $hidden="";
    public $timestamps=false; 
}
