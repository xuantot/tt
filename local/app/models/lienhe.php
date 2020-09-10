<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class lienhe extends Model
{
    protected $table='lienhe';
    protected $primaryKey ='id_contact'; // mặc định là lấy cột ID
    public $timestamps = True;
}
