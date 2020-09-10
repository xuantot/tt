<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\tags;

class TagsController extends Controller
{
    public function GetView_Tags()
    {
        $data['tags'] = tags::orderBy('created_at', 'DESC')->get();
        return view('backend.tags.listtags',$data);
    }
    public function GetAdd_Tags()
    {
        return view('backend.tags.addtags');
    }

    public function PostAdd_Tags(Request $request)
    {      
        $this->validate($request,[
            'tag_name' => 'required|unique:tags,tag_name,',
         //   'tag_slug' => 'required|unique:tags,tag_slug,',                      
        ],[
            'tag_name.required'=>'Tên không được để trống',
            'tag_name.unique'=>'Tên không được trùng', 
         //   'tag_slug.required'=>'URL name không được để trống',
         //   'tag_slug.unique'=>'URL name không được trùng',       
        ]);
        $tags = new tags;     
        $tags->tag_name=$request->tag_name;         
        $tags->save();              
        $tags_temp = tags::find($tags->id);         
        $tags_temp->tag_slug=$request->tag_slug."-".$tags_temp->id;      
        $tags_temp->save();       

        return redirect('admin/tags/list')->with('thongbao','Đã Thêm Thành Công');
    }

    public function Delete_Tags($id)
    {          
        tags::destroy($id);
        return redirect('admin/tags/list')->with('thongbao','Đã Xóa Thành Công');
    }

    public function GetEdit_Tags($id)
    {
        $data['tags'] = tags::find($id);        
        return  view('backend.tags.edittags',$data);
    }

    public function PostEdit_Tags($id,Request $request)
    {              
        $this->validate($request,[
            'tag_name' => 'required|unique:tags,tag_name,'.$id.',id',
          //  'tag_slug' => 'required|unique:tags,tag_slug,'.$id.',id',                   
        ],[
            'tag_name.required'=>'Tên không được để trống',
            'tag_name.unique'=>'Tên không được trùng', 
         //   'tag_slug.required'=>'URL name không được để trống',
         //   'tag_slug.unique'=>'URL name không được trùng',     
        ]);

        $tags = tags::find($id);  
        if ( $tags->tag_name != $request->tag_name )
        {
            $tags->tag_name=$request->tag_name;
            $tags->tag_slug=$request->tag_slug."-".$id;      
            $tags->save();
        }      

        return redirect('admin/tags/list')->with('thongbao','Đã Sửa Thành Công');     
    }   


}
