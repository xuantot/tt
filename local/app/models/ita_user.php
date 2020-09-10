<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ita_user extends Model
{
    protected $table='ita_user';
    protected $primaryKey ='id'; // mặc định là lấy cột ID
    public $timestamps = True;
}
