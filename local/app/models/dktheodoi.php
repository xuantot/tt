<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class dktheodoi extends Model
{
    protected $table='dktheodoi';
    protected $primaryKey ='id_dktd'; // mặc định là lấy cột ID
    public $timestamps = true;
}
