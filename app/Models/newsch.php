<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newsch extends Model
{
    use HasFactory;
    protected $fillable = ['SCH_IND_NO','SCH_IND_NM','MANUFACTURE'





    ];
    protected $table ='newsch';
    protected $primarykey ='SCH_IND_NO';
}
