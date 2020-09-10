<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\models\category;

use App\models\tintuc;


class CategoryController extends Controller
{
    // Route::get('list','backend\CategoryController@GetView_Category');
    // Route::get('add','backend\CategoryController@GetAdd_Category');
    // Route::post('add','backend\CategoryController@PostAdd_Category');
    // Route::get('edit/{id}','backend\CategoryController@GetEdit_Category');
    // Route::post('edit/{id}','backend\CategoryController@PostEdit_Category');
    // Route::get('delete/{id}', 'backend\CategoryController@Delete_Category');   

    public function GetAdd_Category()
    {      
        $data['category_all'] = category::orderBy('order', 'ASC')->get();
        $data['category_parent'] = category::Where('level',1)->orderBy('order', 'ASC')->get();
        return view('backend.danhmuc.adddanhmuc',$data);
    }

    public function GetView_Category()
    {      
        $data['category_all'] = category::orderBy('order', 'ASC')->get();
        $data['category_parent'] = category::Where('level',1)->orderBy('order', 'ASC')->get();
        return view('backend.danhmuc.listdanhmuc',$data);
    }



    public function PostAdd_Category(Request $request)
    {      
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required|unique:category,slug,',
            'short_description' => 'required',          
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',                  
        ],[
            'name.required'=>'Tên không được để trống',
            'slug.required'=>'URL name không được để trống',
            'slug.unique'=>'URL name không được trùng',        
            'short_description.required'=>'Mô tả không được để trống',          
            'img.image'=>'Sai định dạng ảnh',    
            'img.mimes'=>'Sai định dạng ảnh',
            'img.max'=>'Kích thước lớn',
        ]);

        $category = new category;        
        $category->parent_id=$request->parent_id;
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->short_description=$request->short_description;

        if($request->hasFile('img'))
        {
            $file = $request->img;        
            $filename= "category-".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "category-".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $category->img=$filename;
        }
        else
        {
            $category->img='no_image.jpg';
        }
        $category->status=$request->status;
        $category->order=$request->order;

        if ($category->parent_id == 0) {$level = 1;}
        else {$level = 2;}

        $category->level=$level;
        $category->save();       
        return redirect('admin/danhmuc/list')->with('thongbao','Đã Thêm Thành Công')->withInput();
    }

    public function Delete_Category($id)
    {      
        $data = category::find($id);
        $pic = $data->img;
        if ($pic != "no_image.jpg")
        unlink ('public/image/'.$pic);
        category::destroy($id);

        // xoa danh muc cha --> move danh muc con  vao other
             
        if ( $data->level == 2 )
        {
            $data_b = tintuc::where('blog_cate','=',$id)->get();   

          
            foreach ($data_b as $val)
            {
                $blog = tintuc::find($val->id_blog);
                $blog->blog_cate = 2;
                $blog->save();       
            }             
        }  



        if ( $data->level == 1 )
        {
            $data_a = category::where('parent_id','=',$id)->get();   
            foreach ($data_a as $val)
            {
                $cate = category::find($val->id);
                $cate->parent_id=1;
                $cate->save();       
            }             
        }  

        // xoa danh muc con --> move bai viet sang other
     

        return redirect('admin/danhmuc/list')->with('thongbao','Đã Xóa Thành Công');
    
    }

    public function GetEdit_Category($id)
    {
        $data['category'] = category::find($id);
        $data['category_parent'] = category::Where('level',1)->orderBy('order', 'ASC')->get();
        return  view('backend.danhmuc.editdanhmuc',$data);
    }

    public function PostEdit_Category($id,Request $request)
    {              
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required|unique:category,slug,'.$id.',id',
            'short_description' => 'required',          
            'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',                  
        ],[
            'name.required'=>'Tên không được để trống',
            'slug.required'=>'URL name không được để trống',
            'slug.unique'=>'URL name không được trùng',        
            'short_description.required'=>'Mô tả không được để trống',          
            'img.image'=>'Sai định dạng ảnh',    
            'img.mimes'=>'Sai định dạng ảnh',
            'img.max'=>'Kích thước lớn',
        ]);

        $category = category::find($id);        
        $category->parent_id=$request->parent_id;
        $category->name=$request->name;
        $category->slug=$request->slug;
        $category->short_description=$request->short_description;

        if($request->hasFile('img')) 
        {
            if($category->img != "no_image.jpg")
            {
                unlink ('public/image/'.$category->img);
            }
            $file = $request->img;
            $filename= "category-".str_random(9).'.'.$file->getClientOriginalExtension();    
            while(file_exists("public/image".$filename))
            {
                $filename= "category-".str_random(9).'.'.$file->getClientOriginalExtension();    
            }
            $file->move('public/image', $filename);
            $category->img=$filename;
        }
        else
        {
            if (!(isset($category->img)))
                $category->img="no_image.jpg";  
        }    

        $category->status=$request->status;
        $category->order=$request->order;

        if ($category->parent_id == 0) {$level = 1;}
        else {$level = 2;}

        $category->level=$level;

        if ($category->parent_id == $id )
        {               
            return redirect('admin/danhmuc/edit/'.$id)->with('thongbao','Vui Lòng chọn danh mục khác')->withInput();
        }
        else {
            $category->save();       
            return redirect('admin/danhmuc/list')->with('thongbao','Đã Sửa Thành Công');
        }
        


    }   



}
