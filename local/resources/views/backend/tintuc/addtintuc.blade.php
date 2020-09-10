@extends('backend.master.master')
@section('title','Tin Tức')
@section('content')


<section class="content-header">
  <h1>TIN TỨC<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/tintuc/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
  </ol> 
</section>  
 
<section class="content">
<div class="row">   
    <div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">NHẬP THÔNG TIN</h3>          
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form  method="post" enctype="multipart/form-data" action="">
          {{csrf_field()}}
          <div class="box-body">

            <div class="form-group">
              <label>Danh Mục Cha</label>
              <select class="form-control" name="blog_cate" id="blog_cate">  
                {{ Show_News_Category ($category)}}     
              </select>
            </div>      

            <div class="form-group">                          
              <label>Title</label>
              @if($errors->has('blog_title'))<p class='text-red'><strong>{{$errors->first('blog_title')}}</p></strong>@endif   
              <input type="text" class="form-control" id="name" name="blog_title" placeholder="" autocomplete="off" value={{old('blog_title')}} >
            </div>
            <div class="form-group">
                <label>Tên URL</label>
                @if($errors->has('blog_slug'))<p class='text-red'><strong>{{$errors->first('blog_slug')}}</p></strong>@endif   
                <input type="text" class="form-control" id="slug" name="blog_slug" placeholder=""  autocomplete="off" value={{old('blog_slug')}}>
              </div>
            <div class="form-group">
              <label>Mô tả ngắn</label>
              @if($errors->has('blog_des'))<p class='text-red'><strong>{{$errors->first('blog_des')}}</p></strong>@endif   
              <input type="text" class="form-control" id="blog_des" name="blog_des" placeholder="" autocomplete="off"  value={{old('blog_des')}} >
            </div>
            <div class="form-group">
              <label>Chi Tiết</label>
              @if($errors->has('blog_content'))<p class='text-red'><strong>{{$errors->first('blog_content')}}</p></strong>@endif   
              <textarea name="blog_content" class="form-control " id="editor1"></textarea>    
            </div>
            <div class="form-group">
                <label>Ảnh Đại Diện (690 : 330 px)</label>    
                @if($errors->has('blog_pic'))<p class='text-red'><strong>{{$errors->first('blog_pic')}}</p></strong>@endif     
                <input type="file" class="form-control" id="form_pic" name="blog_pic" class="form-control" style="display:none" onchange="changeImg(this)">
                <img id="avatar" class="thumbnail cursorpoint" width="690px" height="330px" src="public/image/import-img.png">
                <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
            </div>        
            <div class="form-group">
              <label>Sắp Xếp</label>
              @if($errors->has('blog_order'))<p class='text-red'><strong>{{$errors->first('blog_order')}}</p></strong>@endif  
              <input type="number" class="form-control" id="blog_order" name="blog_order" placeholder="10" autocomplete="off"  value={{old('blog_order')}}  >
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="blog_active" id="blog_active">                
                <option value='0'>Deactive</option> 
                <option value='1'>Active</option>               
              </select>
            </div>   
            <div class="form-group">
              <label>Tin Nóng</label>
              <select class="form-control" name="blog_hot" id="blog_hot">                
                <option value='0'>No</option> 
                <option value='1'>YES</option>               
              </select>
            </div>              


          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
          <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
        </form>
      </div>
    </div>
</div>
</section>    


@endsection 