<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\dichvu;
use App\models\tags;
use App\models\videohome;
use App\models\contentgt;

use App\models\tintuc;
use App\models\dktheodoi;

use App\models\category;



class AdminController extends Controller
{
    public function GetIndex()
    {
        $data['videohome'] = videohome::first();
        $data['contentgt'] = contentgt::all();    
        $data['tintuc'] = tintuc::all();
        $data['dktheodoi'] = dktheodoi::all();
        $data['category'] = category::all();
        $data['tags'] = tags::all();
        return view('backend.home.main',$data);
    }

    public function GetEdit_Videohome($id)
    {
        $data['videohome'] = videohome::find($id);
        return  view('backend.home.editvideohome',$data);
    }

    public function PostEdit_Videohome($id,Request $request)
    {              
        $this->validate($request,[
            'video_url' => 'required',     
            'video_pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',                  
        ],[
            'video_url.required'=>'Tên không được để trống',    
            'video_pic.image'=>'Sai định dạng ảnh',    
            'video_pic.mimes'=>'Sai định dạng ảnh',
            'video_pic.max'=>'Kích thước lớn',
        ]);
       
        $videohome= videohome::find($id);
        $videohome->video_url = $request->video_url;
   
    
        if($request->hasFile('video_pic')) 
        {
            if($videohome->video_pic != "no_image.jpg")
            {
                unlink ('public/image/'.$videohome->video_pic);
            }
            $file = $request->video_pic;
            $filename= "ita-videohome-".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita-videohome-".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $videohome->video_pic=$filename;
        }
        else
        {
            if (!(isset($videohome->video_pic)))
            $videohome->video_pic="no_image.jpg";  
        }    
        $videohome->save();       
        return redirect('admin/dashboard/view')->with('thongbao','Đã Sửa Thành Công');
    }   

    public function GetEdit_Gioithieu($id)
    {
        $data['contentgt'] = contentgt::find($id);
        return  view('backend.home.editcontentgt',$data);
    }

    public function PostEdit_Gioithieu($id,Request $request)
    {

        $this->validate($request,[
            'gt_title_a' => 'required',     
            'gt_content_a' => 'required', 
            'gt_pic_a' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',                  
        ],[
            'gt_title_a.required'=>'Tiêu Đề không được để trống',    
            'gt_content_a.required'=>'Nội Dung không được để trống',   
            'gt_pic_a.image'=>'Sai định dạng ảnh',    
            'gt_pic_a.mimes'=>'Sai định dạng ảnh',
            'gt_pic_a.max'=>'Kích thước lớn',
        ]);
       
        $contentgt= contentgt::find($id);
        $contentgt->gt_title_a = $request->gt_title_a;
        $contentgt->gt_content_a = $request->gt_content_a;
    
        if($request->hasFile('gt_pic_a')) 
        {
            if($contentgt->gt_pic_a != "no_image.jpg")
            {
                unlink ('public/image/'.$contentgt->gt_pic_a);
            }
            $file = $request->gt_pic_a;
            $filename= "ita-gioithieu-".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita-gioithieu-".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $contentgt->gt_pic_a=$filename;
        }
        else
        {
            if (!(isset($contentgt->gt_pic_a)))
            $contentgt->gt_pic_a="no_image.jpg";  
        }    
        $contentgt->save();       
        return redirect('admin/dashboard/view')->with('thongbao','Đã Sửa Thành Công');


    }

}
