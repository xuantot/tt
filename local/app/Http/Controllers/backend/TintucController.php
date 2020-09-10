<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\tintuc;

use App\models\category;

use App\models\ita_user;

use App\models\tags;

use App\models\news_tags;

use App\Http\Requests\AddTintucRequest;

class TintucController extends Controller
{
    public function GetView_Tintuc()
    {
        $data['tintuc'] = tintuc::orderBy('created_at', 'DESC')->orderBy('blog_order', 'ASC')->get();
        $data['category'] = category::orderBy('created_at', 'DESC')->orderBy('order', 'ASC')->get();
        return view('backend.tintuc.listtintuc',$data);
    }
    public function GetAdd_Tintuc()
    {        
        $data['category'] = category::where("status",1)->orderBy('order', 'ASC')->get();
        return view('backend.tintuc.addtintuc',$data);
    }
    public function PostAdd_Tintuc(AddTintucRequest $request)
    {    
   
        $tintuc = new tintuc;
        $tintuc->blog_cate=$request->blog_cate;
        $tintuc->blog_title=$request->blog_title;
        $tintuc->blog_slug=$request->blog_slug;
        $tintuc->blog_des=$request->blog_des;        
        $tintuc->blog_keywords=$request->blog_keywords;
        $tintuc->blog_content=$request->blog_content;
        if($request->hasFile('blog_pic'))
        {
            $file = $request->blog_pic;      
            $filename= "ita_tintuc_".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita_tintuc_".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $tintuc->blog_pic=$filename;
        }
        else
        {
            $tintuc->blog_pic='no_image.jpg';
        }
        if (isset($request->blog_order)){  $tintuc->blog_order=$request->blog_order;}
        else {$tintuc->blog_order = 10;}
        $tintuc->blog_active=$request->blog_active;   
        $tintuc->blog_hot=$request->blog_hot;          
        $tintuc->user_id =$request->user_id;  
        $tintuc->save();       
        return redirect('admin/tintuc/addtags/'.$tintuc->id_blog)->with('thongbao','Đã Thêm Thành Công')->withInput();
    }
    public function Delete_Tintuc($id)
    {    
        $data = tintuc::find($id);
        $pic=$data->blog_pic;
        unlink ('public/image/'.$pic);
        tintuc::destroy($id);
        return redirect('admin/tintuc/list')->with('thongbao','Đã Xóa Thành Công');
    }
    public function GetEdit_Tintuc($id)
    {
        $data['tintuc'] = tintuc::find($id);
        $data['category'] = category::orderBy('order', 'ASC')->get();
        return  view('backend.tintuc.edittintuc',$data);
    }

    public function PostEdit_Tintuc($id,Request $request)
    {              
        $this->validate($request,[
            'blog_title' => 'required',
            'blog_slug' => 'required|unique:tintuc,blog_slug,'.$id.',id_blog',
            'blog_des' => 'required',
            'blog_content' => 'required',
            'blog_pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',              
        ],[
            'blog_title.required'=>'Tên không được để trống',
            'blog_slug.required'=>'URL name không được để trống',
            'blog_des.required'=>'Mô tả ngắn không được để trống',
            'blog_content.required'=>'Mô tả không được để trống',
            'blog_pic.image'=>'Không phải là ảnh',
            'blog_pic.mimes'=>'Sai định dạng ảnh',
            'blog_pic.max'=>'Dung Lượng quá lớn',
        ]);

        $tintuc= tintuc::find($id);
        $tintuc->blog_cate=$request->blog_cate;
        $tintuc->blog_title=$request->blog_title;
        $tintuc->blog_slug=$request->blog_slug;
        $tintuc->blog_des=$request->blog_des;
        $tintuc->blog_content=$request->blog_content;
        $tintuc->blog_keywords=$request->blog_keywords;
        if($request->hasFile('blog_pic'))
        {
            if($tintuc->blog_pic != "no_image.jpg")
            {
                unlink ('public/image/'.$tintuc->blog_pic);
            }
            $file = $request->blog_pic;      
            $filename= "ita_tintuc_".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita_tintuc_".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $tintuc->blog_pic=$filename;
        }
        else
        {
            if (!(isset($tintuc->blog_pic)))
            $tintuc->blog_pic='no_image.jpg';
        }
        if (isset($request->blog_order)){  $tintuc->blog_order=$request->blog_order;}
        else {$tintuc->blog_order = 10;}
        $tintuc->blog_active=$request->blog_active;   
        $tintuc->blog_hot=$request->blog_hot;    
        $tintuc->user_id =$request->user_id;  
        $tintuc->save();       
        return redirect('admin/tintuc/list')->with('thongbao','Đã Sửa Thành Công');
        }   


        public function GetAddTags_Tintuc($id)
        {
            $data['tintuc'] = tintuc::where('id_blog',$id)->get()->first();    
            $data['tags'] = tags::all();    
            $data['tags_list'] = news_tags::where("id_blog",$id)->get();    
      
            return view('backend.tintuc.addtintuctags',$data);
        }

        public function PostAddTags_Tintuc($id, Request $request)
        {
           // dd($request->all());
            if (isset($request->tag_single))
           
            {
                $this->validate($request,[
                    'tag_single' => 'unique:tags,tag_name,',                               
                ],[                
                    'tag_single.unique'=>'Tên đã trùng, Vui lòng chọn từ có sẵn',            
                ]);

                // Cập nhật vào bảng Tags
                $tags = new tags;     
                $tags->tag_name=$request->tag_single;         
                $tags->save();     

                $tags_temp = tags::find($tags->id);         
                $tags_temp->tag_slug=$request->tag_slug."-".$tags_temp->id;      
                $tags_temp->save();  

                $news_tags = new news_tags;     
                $news_tags->id_blog = $request->news_id;         
                $news_tags->id_tags = $tags_temp->id;  
                $news_tags->save(); 
            }

            // cập nhật vào bảng news-tags

            if (isset($request->tags_new))
            {                   
                foreach ( $request->tags_new as $val)
                {
                    $news_tags_multi = new news_tags;  
                    $news_tags_multi->id_blog = $request->news_id;   
                    $news_tags_multi->id_tags = $val;  
                    $news_tags_multi->save(); 
                }             
            }
            return redirect('admin/tintuc/addtags/'.$id)->with('thongbao','Đã Thêm Tags Thành Công');          
        }

        public function DeleteTags_Tintuc($id_news,$id_tags)
        {
            news_tags::destroy($id_tags);
            return redirect('admin/tintuc/addtags/'.$id_news)->with('thongbao','Đã Xóa Thành Công');
        }
}
