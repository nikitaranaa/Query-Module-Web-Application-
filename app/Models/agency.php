<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agency extends Model
{
    use HasFactory;  
    protected $fillable = ['AGCODE','AGNAME'
    ];
    protected $table ='agency';
    protected $primarykey ='AGCODE';
}
