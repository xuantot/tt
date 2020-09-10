<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\lienhe;
use App\Http\Requests\AddLienheRequest;

class LienheController extends Controller
{
    public function GetView_Lienhe()
    {
        $data['lienhe'] = lienhe::all();
        return view('backend.lienhe.listlienhe',$data);
    }  
    public function Delete_Lienhe($id)
    {
        $data = lienhe::find($id);         
        lienhe::destroy($id);
        return redirect('admin/lienhe/list')->with('thongbao','Đã Xóa Thành Công');
    }
    public function GetEdit_Lienhe($id)
    {
        $data['lienhe'] = lienhe::find($id);
        return  view('backend.lienhe.editlienhe',$data);
    }
    public function PostEdit_Lienhe($id,Request $request)
    {              
    //    dd($request->all());
        $this->validate($request,[
            'ct_name' => 'required',
            'ct_phone' => 'required',
            'ct_email' => 'required|email',
            'ct_title' => 'required',
            'ct_content' => 'required',                 
        ],[
            'ct_name.required'=>'Tên không được để trống',
            'ct_phone.required'=>'Số Điện Thoại không được để trống',
            'ct_email.required'=>'Email không được để trống',
            'ct_email.email'=>'Email sai định dạng',
            'ct_title.required'=>'Nội Dung không được để trống',
            'ct_content.required'=>'Nội Dung không được để trống',
        ]);
        $lienhe= lienhe::find($id);
        $lienhe->ct_name=$request->ct_name;
        $lienhe->ct_phone=$request->ct_phone;
        $lienhe->ct_email=$request->ct_email;
        $lienhe->ct_title=$request->ct_title;
        $lienhe->ct_content=$request->ct_content;      
        $lienhe->save();       
        return redirect('admin/lienhe/list')->with('thongbao','Đã Sửa Thành Công');
    }
}
