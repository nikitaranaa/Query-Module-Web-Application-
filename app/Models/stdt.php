<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stdt extends Model
{
    use HasFactory;
    protected $fillable = [



    'STDT_CODE','STDT_NAME','NEW_STDT'

    ];
    protected $table ='stdt';
    protected $primarykey ='STDT_CODE';
}
