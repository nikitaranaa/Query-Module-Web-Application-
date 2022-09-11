<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule_industry_post2000 extends Model
{
    use HasFactory;
    protected $fillable = ['SCHCODE','SCHEDULE_DESCRIPTION','MANUFACTURING','ADMINSITRATIVE_CODE','SECTOR_HEAD','SECTOR_TYPE','OLD_CODE'





    ];
    protected $table ='schedule_industry_post2000';
    protected $primarykey ='SCHCODE';
}
