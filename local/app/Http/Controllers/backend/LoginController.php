<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\ita_user;
use App\Http\Requests\CheckLoginRequest;

use Auth;

class LoginController extends Controller
{
    public function GetView_Login()
    {
        return view('backend.login.login');
    }

    public function Post_Login(CheckLoginRequest $request)
    {
    if ($request->remember == 'ok')
    { $remember = true ;} else { $remember = false; }

       if(Auth::attempt(['name' => $request->name, 'password' => $request->password],$remember))
          {return redirect('admin/dashboard/view');}  
        else {return redirect('login')->withInput()->with('thongbao','Đăng Nhập Thất Bại');}       
    }

    public function Log_out()
    {
        Auth::logout();
        return redirect('login');
    }

}
