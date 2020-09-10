<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class slideanh extends Model
{
    protected $table='slideanh';
    protected $primaryKey ='id_pic'; // mặc định là lấy cột ID
    public $timestamps = false;
}
