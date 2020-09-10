<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class news_tags extends Model
{
    protected $table='news_tags';
    protected $primaryKey ='id'; // mặc định là lấy cột ID
    public $timestamps = false;

    public function tintuc() {
		return $this->hasOne('\App\models\tintuc', 'id_blog', 'id_blog');
	}

    public function tags() {
		return $this->hasOne('\App\models\tags', 'id', 'id_tags');
	}
}
