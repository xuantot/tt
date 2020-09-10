@extends('backend.master.master')
@section('title','Sửa Thành Viên')
@section('content')


<section class="content-header">
  <h1>Sửa Thành Viên<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/thanhvien/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
  </ol> 
</section>  
 
<section class="content">
<div class="row">   
    <div class="col-md-12">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">SỬA THÔNG TIN</h3>          
        </div>
        <!-- /.box-header -->
        <!-- form start -->

        <form  method="post" enctype="multipart/form-data" action="">
          {{csrf_field()}}
          <div class="box-body">
            <div class="form-group">                          
              <label>Tên Đăng Nhập</label>
              @if($errors->has('name'))<p class='text-red'><strong>{{$errors->first('name')}}</p></strong>@endif   
              <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$user->name}}">
            </div>

            <div class="form-group">                          
                <label>Tên Đầy Đủ</label>
                @if($errors->has('full_name'))<p class='text-red'><strong>{{$errors->first('full_name')}}</p></strong>@endif   
                <input type="text" class="form-control" id="full_name" name="full_name" placeholder="anh 1" value="{{$user->full_name}}">
              </div>

            <div class="form-group">
              <label>Ảnh : ( 200 x 200 px )</label>    
              @if($errors->has('avatar'))<p class='text-red'><strong>{{$errors->first('avatar')}}</p></strong>@endif     
              <input type="file" class="form-control" id="form_pic" value="{{$user->avatar}}" name="avatar" class="form-control" style="display:none" onchange="changeImg(this)">
              <img id="avatar" class="thumbnail cursorpoint" width="200px" height="200px" src="public/image/{{$user->avatar}}">
              <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
            </div>  

            <div class="form-group">
                <label>Email</label>
                @if($errors->has('email'))<p class='text-red'><strong>{{$errors->first('email')}}</p></strong>@endif   
                <input type="text" class="form-control" id="email" name="email" placeholder="https://inteaca.com/gioithieu" value="{{$user->email}}" >
            </div>

            <div class="form-group">
              <label>Phone</label>
              @if($errors->has('phone'))<p class='text-red'><strong>{{$errors->first('phone')}}</p></strong>@endif   
              <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="{{$user->phone}}">
            </div>   
            
            <div class="form-group">
                <label>Mô Tả Ngắn</label>
                @if($errors->has('short_des'))<p class='text-red'><strong>{{$errors->first('short_des')}}</p></strong>@endif   
                <input type="text" class="form-control" id="short_des" name="short_des" placeholder="" value="{{$user->short_des}}">
              </div>   

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>

          <input type="hidden" name="user_id" value="{{$user->id}}">

        </form>
      </div>
    </div>
</div>
</section>   

@endsection 