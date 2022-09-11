<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_names extends Model
{
    use HasFactory;
    protected $fillable = ['USER_ID','PASSWORD','USER_NAME','USER_GROUP','USER_PREVE'





    ];
    protected $table ='user_names';
    protected $primarykey ='USER_ID';
}
