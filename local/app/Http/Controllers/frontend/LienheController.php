<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\lienhe;

class LienheController extends Controller
{
     public function AddLienhe(Request $request)
    {
        $this->validate($request,[
            'ct_name' => 'required',  
            'ct_phone' => 'required',  
            'ct_email' => 'required|email',  
            'ct_title' => 'required',  
            'ct_content' => 'required',  
        ],[
            'ct_name.required'=>'Bạn Vui Lòng Điền Họ và Tên',  
            'ct_phone.required'=>'Bạn Vui Lòng Điền Số Điện Thoại',  
            'ct_email.required'=>'Bạn Vui Lòng Điền Email',  
            'ct_email.email'=>'Bạn Vui Lòng Kiểm Tra Lại Email',  
            'ct_title.required'=>'Bạn Vui Lòng Điền Tiêu Đề',  
            'ct_content.required'=>'Bạn Vui Lòng Mô Tả Nội Dung',  
        ]);

        $lienhe = new lienhe;
        $lienhe->ct_name=$request->ct_name;
        $lienhe->ct_phone=$request->ct_phone;
        $lienhe->ct_email=$request->ct_email;
        $lienhe->ct_title=$request->ct_title;
        $lienhe->ct_content=$request->ct_content;
        $lienhe->save();  
        return redirect('lien-he-news')->with('thongbao',$lienhe->ct_name)->withInput();
    }
}

