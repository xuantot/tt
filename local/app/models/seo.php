<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class seo extends Model
{
    protected $table='seo';
    protected $primaryKey ='id_seo'; // mặc định là lấy cột ID
    public $timestamps = false;
}
