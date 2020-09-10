<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\tintuc;

class TintucController extends Controller
{
    public function ShowData($blog_slug)
    {   
        $data['detail'] = tintuc::where('blog_active', '=', '1')->where('blog_slug','=',$blog_slug)->get()->first();  

        $data['tintuc_new'] = tintuc::where('blog_active', 1)->take(4)->orderBy('updated_at', 'ASC')->get();

        return view('frontend.detailnews',$data);
    }
}
