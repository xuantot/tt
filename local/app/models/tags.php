<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    protected $table='tags';
    protected $primaryKey ='id'; // mặc định là lấy cột ID
    public $timestamps = True;

}
