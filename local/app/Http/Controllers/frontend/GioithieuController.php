<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\doitac;
use App\models\contentgt;
use App\models\seo;

class GioithieuController extends Controller
{
    public function ShowData()
    {              
       
        $data['doitac'] = doitac::orderBy('vd_order', 'ASC')->get();
        $data['gt1'] = contentgt::where('id_gt',1)->get();
        $data['gt2'] = contentgt::where('id_gt',2)->get();
        dd($data->all());
        return view('frontend.intro',$data);
    }
}
