<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\slideanh;
use App\Http\Requests\AddSlideanhRequest;

class SlideanhController extends Controller
{
    public function GetView_Slideanh()
    {
        $data['slideanh'] = slideanh::orderBy('pic_order', 'ASC')->get();
        return view('backend.slideanh.listslideanh',$data);
    }

    public function GetAdd_Slideanh()
    {
        return view('backend.slideanh.addslideanh');
    }

    public function PostAdd_Slideanh(AddSlideanhRequest $request)
    {    
        $slideanh = new slideanh;
        $slideanh->pic_name=$request->pic_name;
        if($request->hasFile('pic_img'))
        {
            $file = $request->pic_img;
            $filename= "ita_slideanh_".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita_slideanh_".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $slideanh->pic_img=$filename;
        }
        else
        {
            $slideanh->pic_img='no_image.jpg';
        }       
        if (isset($request->pic_link)){ $slideanh->pic_link=$request->pic_link; }
        else {$slideanh->pic_link = '#';}

        if (isset($request->pic_order)){ $slideanh->pic_order=$request->pic_order; }
        else {$slideanh->pic_order = 10;}

        $slideanh->save();       
        return redirect('admin/slideanh/list')->with('thongbao','Đã Thêm Thành Công');
    }
    public function Delete_Slideanh($id)
    {
        $data = slideanh::find($id);
        $pic=$data->pic_img;
        if ($pic != 'no_image.jpg' ) { unlink ('public/image/'.$pic); }      
        slideanh::destroy($id);
        return redirect('admin/slideanh/list')->with('thongbao','Đã Xóa Thành Công');
    }
    public function GetEdit_Slideanh($id)
    {
        $data['slideanh'] = slideanh::find($id);
        return  view('backend.slideanh.editslideanh',$data);
    }
    public function PostEdit_Slideanh($id,Request $request)
    {              
    //    dd($request->all());
        $this->validate($request,[
            'pic_name' => 'required',
            'pic_img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',                    
        ],[
            'pic_name.required'=>'Tên không được để trống',         
            'pic_img.image'=>'Không phải là ảnh',
            'pic_img.mimes'=>'Sai định dạng ảnh',
            'pic_img.max'=>'Dung Lượng quá lớn',
        ]);
        $slideanh= slideanh::find($id);
        $slideanh->pic_name=$request->pic_name;
        if($request->hasFile('pic_img'))
        {
            if($slideanh->pic_img != "no_image.jpg")
            {
                unlink ('public/image/'.$slideanh->pic_img);
            }
            $file = $request->pic_img;
            $filename= "ita_slideanh_".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita_slideanh_".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $slideanh->pic_img=$filename;
        }
        else
        {
            if (!(isset($slideanh->pic_img)))
            $slideanh->pic_img='no_image.jpg';
        }

        if (isset($request->pic_link)){ $slideanh->pic_link=$request->pic_link; }
        else {$slideanh->pic_link = '#';}

        if (isset($request->pic_order)){ $slideanh->pic_order=$request->pic_order; }
        else {$slideanh->pic_order = 10;}
        $slideanh->save();       
        return redirect('admin/slideanh/list')->with('thongbao','Đã Thêm Thành Công');
    }
}
