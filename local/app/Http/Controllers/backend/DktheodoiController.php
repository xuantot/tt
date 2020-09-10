<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\models\dktheodoi;
use App\Http\Requests\AddDktheodoiRequest;

class DktheodoiController extends Controller
{
    public function GetView_Dktheodoi()
    {
        $data['dktheodoi'] = dktheodoi::all();
        return view('backend.dktheodoi.listdktheodoi',$data);
    }
    public function GetAdd_Dktheodoi()
    {
        return view('backend.dktheodoi.adddktheodoi');
    }
    public function PostAdd_Dktheodoi(AddDktheodoiRequest $request)
    {    
        $dktheodoi = new dktheodoi;
        $dktheodoi->dkth_email=$request->dkth_email;
        $dktheodoi->save();       
        return redirect('admin/dktheodoi/list')->with('thongbao','Đã Thêm Thành Công');
    }
    public function Delete_Dktheodoi($id)
    {     
        dktheodoi::destroy($id);
        return redirect('admin/dktheodoi/list')->with('thongbao','Đã Xóa Thành Công');
    }
   
    public function GetEdit_Dktheodoi($id)
    {
        $data['dktheodoi'] = dktheodoi::find($id);
        return  view('backend.dktheodoi.editdktheodoi',$data);
    }

    public function PostEdit_Dktheodoi($id,Request $request)
    {              
        $this->validate($request,[
            'dkth_email' => 'required|email',                    
        ],[
            'dkth_email.required'=>'Xin Hãy Điền Thông Tin Của Bạn',
            'dkth_email.email'=>'Không Đúng Định Dạng Email',
        ]);

        $dktheodoi= dktheodoi::find($id);
        $dktheodoi->dkth_email=$request->dkth_email;
        $dktheodoi->save();       
        return redirect('admin/dktheodoi/list')->with('thongbao','Đã Thêm Thành Công');
    }
}
