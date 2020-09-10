<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\seo;

class SeoController extends Controller
{
    public function GetView_Seo()
    {
    $data['seo'] = seo::all();
    return view('backend.seo.listseo',$data);
    }

    public function GetEdit_Seo($id)
    {
       $data['seo'] = seo::find($id);        
       return view('backend.seo.editseo',$data);
    }

    public function PostEdit_Seo($id,Request $request)
    {
        $this->validate($request,[
            'seo_title' => 'required',           
            'seo_des' => 'required',        
            'seo_keywords' => 'required',    
            'seo_pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',                  
        ],[
            'seo_title.required'=>'Tên không được để trống',           
            'seo_des.required'=>'Mô tả ngắn không được để trống',
            'seo_keywords.required'=>'Mô tả không được để trống',           
            'seo_pic.image'=>'Sai định dạng ảnh',    
            'seo_pic.mimes'=>'Sai định dạng ảnh',
            'seo_pic.max'=>'Kích thước lớn',
        ]);

        $seo= seo::find($id);

        $seo->seo_title=$request->seo_title;   
        $seo->seo_des=$request->seo_des;
        $seo->seo_keywords=$request->seo_keywords;
             
    
        if($request->hasFile('seo_pic')) 
        {
            if($seo->seo_pic != "no_image.jpg")
            {
                unlink ('public/image/'.$seo->seo_pic);
            }
            $file = $request->seo_pic;
            $filename= "ita-seo-".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita-seo-".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $seo->seo_pic=$filename;
        }
        else
        {
            if (!(isset($seo->seo_pic)))
                $seo->seo_pic="no_image.jpg";  
        }    
        $seo->save();       
        return redirect('admin/seo/view')->with('thongbao','Đã Sửa Thành Công');
    }  

}
