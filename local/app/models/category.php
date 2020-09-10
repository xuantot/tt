<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table='category';
    protected $primaryKey ='id'; // mặc định là lấy cột ID
    public $timestamps = true;
}
