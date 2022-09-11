<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    protected $fillable = ['CONTCODE','CONTNAME','CNT_REGION'

    ];
    protected $table ='country';
    protected $primarykey ='CONTCODE';
}
