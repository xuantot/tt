<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\dktheodoi;

use Mail;

class DktheodoiController extends Controller
{
    public function AddDkth(Request $request)
    {
        $this->validate($request,[
            'email_subscribe' => 'required|email|unique:dktheodoi,dkth_email',                              
        ],[
            'email_subscribe.required'=>'Bạn Vui Lòng Điền Thông Tin Email',           
            'email_subscribe.email'=>'Bạn Vui Lòng Điền Đúng Định Dạng Email',  
            'email_subscribe.unique'=>'Tài Khoản Email này đã được đăng ký',
        ]);

        $dktheodoi = new dktheodoi;
        $dktheodoi->dkth_email=$request->email_subscribe;
        
    //      Mail::send('frontend.maildktd', array('email'=>$dktheodoi->dkth_email, 'content'=>"đã đăng ký theo dõi vnjob.jp"), function($message){
	   //     $message->to('phi.vovan.90@gmail.com', 'Visitor')->subject('Đăng Ký Theo Dõi vnjob.jp !');
	   // });
        
        
        $dktheodoi->save();  
        return redirect('dang-ky-theo-doi')->with('thongbao',$dktheodoi->dkth_email)->withInput();
}
}