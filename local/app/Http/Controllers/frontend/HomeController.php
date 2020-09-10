<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\slideanh;
use App\models\tintuc;
use App\models\videohome;
use App\models\contentgt;
use App\models\seo;


use App\models\category;
class HomeController extends Controller
{

    public function ShowHome()
    {      
        $data['category_home'] = category::Where('status','1')->orderBy('order', 'ASC')->get();
        $data['tt_main'] = tintuc::Where('blog_active','1')->orderBy('created_at', 'DESC')->get();
        $data['seo'] = seo::where('id_seo', 1)->get()->first();
        $data['videohome'] = videohome::first();     
        return view('frontend.index',$data);
    }

    public function ShowData($cate_slug="")
    {      

        $blog_catego  = category::where('slug','=',$cate_slug)->where('status','=',1)->first();         
        $id_catego    =  $blog_catego['id'];
        if ( $id_catego==NULL) {
        switch($cate_slug){       
            case "gioithieu" :  
                    $data['gt'] = contentgt::all();                      
                    $data['seo'] = seo::where('id_seo', 2)->get()->first();     
                    return view('frontend.intro',$data);break;           
            case "lienhe"    :  
                    $data['seo'] = seo::where('id_seo', 4)->get()->first();                   
                    return view('frontend.contact',$data);break;       
            case "gallery"    :  
                    $data['seo'] = seo::where('id_seo', 3)->get()->first();     
                    $data['pic'] = slideanh::paginate(15);  
                    return view('frontend.gallery',$data);break;          
            case "dang-ky-theo-doi"    :  return view('frontend.dktheodoi');break;      
            case "lien-he-news"    :  return view('frontend.lienheita');break;
            default : return view('errors.404');
            }
        }
        else {
            $data['name_catego']  = category::where('slug','=',$cate_slug)->where('status','=',1)->first();  
            $data['tintuc_group'] = tintuc::where('blog_active', 1)->where('blog_cate', '=', $blog_catego->id)->orderBy('created_at', 'DESC')->paginate(5);

            return view('frontend.news',$data);
        }     
        
    }
    public function ShowBlog($cate_slug="", $blog_slug="")
    {
        $blog_catego    = category::where('slug','=',$cate_slug)->where('status','=',1)->first();  
        $data['detail_news']  = tintuc::where('blog_slug', '=', $blog_slug)->where('blog_active', '=', 1)->first();
        $data['detail_relate']  = tintuc::where('blog_slug', '<>', $blog_slug)->where('blog_cate', '=', $blog_catego->id)->where('blog_active', '=', 1)->take(4)->get();
        return view('frontend.detailnews',$data);
    }

}
