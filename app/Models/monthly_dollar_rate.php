<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class monthly_dollar_rate extends Model
{
    use HasFactory;
    protected $fillable = ['DOLLAR_RATE','YEARMONTH'





    ];
    protected $table ='monthly_dollar_rate';
    protected $primarykey ='YEARMONTH';
}
