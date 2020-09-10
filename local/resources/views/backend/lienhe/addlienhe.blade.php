@extends('backend.master.master')
@section('title','Thêm Khóa Học')
@section('content')


<section class="content-header">
  <h1>KHÓA HỌC<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/khoahoc/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
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
              <label>Tên Khóa Học</label>
              @if($errors->has('kh_name'))<p class='text-red'><strong>{{$errors->first('kh_name')}}</p></strong>@endif   
              <input type="text" class="form-control" id="kh_name" name="kh_name" placeholder="Khóa Học Istqb">
            </div>
            <div class="form-group">
                <label>Tên URL</label>
                @if($errors->has('kh_slug'))<p class='text-red'><strong>{{$errors->first('kh_slug')}}</p></strong>@endif   
                <input type="text" class="form-control" id="kh_slug" name="kh_slug" placeholder="khoa-hoc-istqb">
              </div>
            <div class="form-group">
              <label>Mô tả ngắn</label>
              @if($errors->has('kh_des'))<p class='text-red'><strong>{{$errors->first('kh_des')}}</p></strong>@endif   
              <input type="text" class="form-control" id="kh_des" name="kh_des" placeholder="">
            </div>
            <div class="form-group">
              <label>Chi Tiết Khóa Học</label>
              @if($errors->has('kh_content'))<p class='text-red'><strong>{{$errors->first('kh_content')}}</p></strong>@endif   
              <input type="text" class="form-control" id="kh_content" name="kh_content" placeholder="">
            </div>
            <div class="form-group">
                <label>Ảnh Khóa Học</label>    
                @if($errors->has('kh_pic'))<p class='text-red'><strong>{{$errors->first('kh_pic')}}</p></strong>@endif     
                <input type="file" class="form-control" id="form_pic" name="kh_pic" class="form-control" style="display:none" onchange="changeImg(this)">
                <img id="avatar" class="thumbnail cursorpoint" width="100%" height="350px" src="public/image/import-img.png">
                <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
            </div>        
            <div class="form-group">
              <label>Thời Gian Khóa Học</label>
              @if($errors->has('kh_time'))<p class='text-red'><strong>{{$errors->first('kh_time')}}</p></strong>@endif  
              <input type="text" class="form-control" id="kh_time" name="kh_time" placeholder="6 tháng">
            </div>
            <div class="form-group">
              <label>Status</label>
              <select class="form-control" name="kh_active" id="kh_active">                
                <option value='0'>Deactive</option> 
                <option value='1'>Active</option>               
              </select>
            </div>           
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
</div>
</section>    


@endsection 