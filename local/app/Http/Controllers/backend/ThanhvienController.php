<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\ita_user;

class ThanhvienController extends Controller
{
    public function GetView_Thanhvien()
    {
        $data['users'] = ita_user::all();       
        return view('backend.users.listusers',$data);
    }
    public function GetAdd_Thanhvien()
    {          
        return view('backend.users.addusers');
    }

    public function GetEdit_Thanhvien($id)
    {          
        $data['user'] = ita_user::find($id);     
        return  view('backend.users.editusers',$data);
    }

    public function PostEdit_Thanhvien($id,Request $request)
    {              
        $this->validate($request,[
            'full_name' => 'required',
            'name' => 'required|unique:ita_user,name,'.$id.',id',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240', 
            'email' => 'required|email',
            'phone' => 'required',
            'short_des' => 'required',            
        ],[
            'full_name.required'=>'Tên đầy đủ không được để trống',
            'name.required'=>'Tên đăng nhập không được để trống',
            'name.unique'=>'Tên đăng nhập không được để trống',
            'email.required'=>'Email không được để trống',
            'email.email'=>'Email không đúng định dạng',
            'phone.required'=>'Phone không được để trống',
            'short_des.required'=>'Mô tả không được để trống',
            'avatar.image'=>'Không phải là ảnh',
            'avatar.mimes'=>'Sai định dạng ảnh',
            'avatar.max'=>'Dung Lượng quá lớn',
        ]);

        $user=  ita_user::find($id);
        $user->full_name=$request->full_name;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->short_des=$request->short_des;

        if($request->hasFile('avatar'))
        {
            if($user->avatar != "no_image.jpg")
            {
                unlink ('public/image/'.$user->avatar);
            }
            $file = $request->avatar;      
            $filename= "user_avatar_".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "user_avatar_".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $user->avatar=$filename;
        }
        else
        {
            if (!(isset($user->avatar)))
            $user->avatar='no_image.jpg';
        }
        $user->save();       
        return redirect('admin/thanhvien/list')->with('thongbao','Đã Sửa Thành Công');
        }   

}
