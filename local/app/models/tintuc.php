<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table='tintuc';
    protected $primaryKey ='id_blog'; // mặc định là lấy cột ID
    public $timestamps = true;

    public function category() {
        return $this->hasOne('App\models\category', 'id', 'blog_cate');
    }
    public function ita_user() {
      return $this->hasOne('App\models\ita_user', 'id', 'user_id');
    }
    public function tags()
    {
    	return $this->belongstoMany('App\models\tags','news_tags','id_blog','id_tags');
    }


}
