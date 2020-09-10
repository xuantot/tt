<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class diachi extends Model
{
    protected $table='diachi';
    protected $primaryKey ='id_add'; // mặc định là lấy cột ID
    public $timestamps = false;
}
