<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class doitac extends Model
{
    protected $table='doitac';
    protected $primaryKey ='id_vendor'; // mặc định là lấy cột ID
    public $timestamps = false;
}
