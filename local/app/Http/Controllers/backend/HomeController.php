<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\dichvu;
use App\models\infor;

use App\models\videohome;
use App\models\contentgt;
use App\models\category;

class HomeController extends Controller
{
    public function GetView_home()
    {
        $data['videohome'] = videohome::all();

        return view('backend.home.main',$data);
    }



}
