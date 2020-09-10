<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class dichvu extends Model
{
    protected $table='dichvu';
    protected $primaryKey ='id_dv'; // mặc định là lấy cột ID
    public $timestamps = false;
}
