<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dollrate extends Model
{
    use HasFactory;
    protected $fillable = [ 'YEAR','DOLLAR'
    ];
    protected $table ='dollrate';
    protected $primarykey ='YEAR';
}
