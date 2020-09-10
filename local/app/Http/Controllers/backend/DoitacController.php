<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\doitac;
use App\Http\Requests\AddDoitacRequest;

class DoitacController extends Controller
{
    public function GetView_Doitac()
    {
        $data['doitac'] = doitac::orderBy('vd_order', 'ASC')->get();
        return view('backend.doitac.listdoitac',$data);
    }

    public function GetAdd_Doitac()
    {
        return view('backend.doitac.adddoitac');
    }

    public function PostAdd_Doitac(AddDoitacRequest $request)
    {    
        $doitac = new doitac;
        $doitac->vd_name=$request->vd_name;
        if($request->hasFile('vd_pic'))
        {
            $file = $request->vd_pic;
            $filename= "ita_doitac_".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita_doitac_".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $doitac->vd_pic=$filename;
        }
        else
        {
            $doitac->vd_pic='no_image.jpg';
        }
        if (isset($request->vd_link)){$doitac->vd_link=$request->vd_link;}
        else {$doitac->vd_link='#';} 

        if (isset($request->vd_order)){$doitac->vd_order=$request->vd_order;}
        else {$doitac->vd_order=10;}        

        $doitac->save();       
        return redirect('admin/doitac/list')->with('thongbao','Đã Thêm Thành Công')->withInput();
    }
    public function Delete_Doitac($id)
    {
        $data = doitac::find($id);
        $pic=$data->vd_pic;
        unlink ('public/image/'.$pic);
        doitac::destroy($id);
        return redirect('admin/doitac/list')->with('thongbao','Đã Xóa Thành Công');
    }
    public function GetEdit_Doitac($id)
    {
        $data['doitac'] = doitac::find($id);
        return  view('backend.doitac.editdoitac',$data);
    }
    public function PostEdit_Doitac($id,Request $request)
    {              
    //    dd($request->all());
        $this->validate($request,[
            'vd_name' => 'required',            
            'vd_pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',                    
        ],[
            'vd_name.required'=>'Xin Hãy Điền Thông Tin Của Bạn',
            'vd_pic.image'=>'Không phải là ảnh',
            'vd_pic.mimes'=>'Sai định dạng ảnh',
            'vd_pic.max'=>'Dung Lượng quá lớn',
        ]);
        $doitac= doitac::find($id);

        $doitac->vd_name=$request->vd_name;
        if($request->hasFile('vd_pic'))
        {
            if($doitac->vd_pic != "no_image.jpg")
            {
                unlink ('public/image/'.$doitac->vd_pic);
            }
            $file = $request->vd_pic;
            $filename= "ita_doitac_".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "ita_doitac_".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $doitac->vd_pic=$filename;
        }
        else
        {
            if (!(isset($doitac->vd_pic)))
            $doitac->vd_pic='no_image.jpg';
        }
        
        if (isset($request->vd_link)){$doitac->vd_link=$request->vd_link;}
        else {$doitac->vd_link='#';}  

        if (isset($request->vd_order)){$doitac->vd_order=$request->vd_order;}
        else {$doitac->vd_order=10;}  

        $doitac->save();       
        return redirect('admin/doitac/list')->with('thongbao','Đã Sửa Thành Công');

    }



}
