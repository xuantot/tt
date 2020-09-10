<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\diachi;
use App\Http\Requests\AddDiachiRequest;

class DiachiController extends Controller
{
    public function GetView_Diachi()
    {
        $data['diachi'] = diachi::first();      
        
        return view('backend.diachi.listdiachi',$data);
    }
    public function PostEdit_Diachi(Request $request)
    {
        $this->validate($request,[
            'ad_here' => 'required',
            'ad_phone' => 'required',
            'ad_email' => 'required|email',
            'ad_fb' => 'required',                           
        ],[
            'ad_here.required'=>'Địa Chỉ không được để trống',
            'ad_phone.required'=>'Số Điện Thoại không được để trống',
            'ad_email.required'=>'Email không được để trống',
            'ad_email.email'=>'Email sai định dạng',
            'ad_fb.required'=>'Facebook không được để trống',           
        ]);
        $diachi= diachi::find(1);
        $diachi->ad_here=$request->ad_here;
        $diachi->ad_phone=$request->ad_phone;
        $diachi->ad_email=$request->ad_email;
        $diachi->ad_fb=$request->ad_fb; 
        $diachi->ad_bank=$request->ad_bank;   
        $diachi->ad_chat=$request->ad_chat; 
        $diachi->ad_fanpage=$request->ad_fanpage; 
        $diachi->ad_fbroot=$request->ad_fbroot;      
        $diachi->save();       
        return redirect('admin/diachi/view')->with('thongbao','Đã Sửa Thành Công');
    }
}
