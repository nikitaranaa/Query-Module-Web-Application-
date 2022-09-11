<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admnew2 extends Model
{
    use HasFactory;
    protected $fillable = [
       'ADM_MIN','ADM_NEW','AMIN_DES','AMIN_ADDR','HOD_NAME','DESGNATION','MAIL_CODE'
    ];
    protected $table ='admnew2';
    protected $primarykey ='ADM_NEW';
}
