<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class infor extends Model
{
    protected $table='infor';
    protected $primaryKey ='id_info'; // mặc định là lấy cột ID
    public $timestamps = false;
}
