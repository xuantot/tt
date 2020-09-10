<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class videohome extends Model
{
    protected $table='videohome';
    protected $primaryKey ='id_video'; // mặc định là lấy cột ID
    public $timestamps = false;
}
