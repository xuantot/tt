@extends('backend.master.master')
@section('title','Sửa Slide Ảnh')
@section('content')


<section class="content-header">
  <h1>SLIDE ẢNH<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/slideanh/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
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
              <label>Tên Ảnh</label>
              @if($errors->has('pic_name'))<p class='text-red'><strong>{{$errors->first('pic_name')}}</p></strong>@endif   
              <input type="text" class="form-control" id="pic_name" name="pic_name" placeholder="anh 1" value="{{$slideanh->pic_name}}">
            </div>
            <div class="form-group">
              <label>Ảnh : ( 2000 x 800 px )</label>    
              @if($errors->has('pic_img'))<p class='text-red'><strong>{{$errors->first('pic_img')}}</p></strong>@endif     
              <input type="file" class="form-control" id="form_pic" value="{{$slideanh->pic_img}}" name="pic_img" class="form-control" style="display:none" onchange="changeImg(this)">
              <img id="avatar" class="thumbnail cursorpoint" width="1000px" height="400px" src="public/image/{{$slideanh->pic_img}}">
              <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
          </div>     
            <div class="form-group">
                <label>Link</label>
                @if($errors->has('pic_link'))<p class='text-red'><strong>{{$errors->first('pic_link')}}</p></strong>@endif   
                <input type="text" class="form-control" id="pic_link" name="pic_link" placeholder="https://inteaca.com/gioithieu" value="{{$slideanh->pic_link}}" >
              </div>
            <div class="form-group">
              <label>Sắp Xếp</label>
              @if($errors->has('pic_order'))<p class='text-red'><strong>{{$errors->first('pic_order')}}</p></strong>@endif   
              <input type="text" class="form-control" id="pic_order" name="pic_order" placeholder="" value="{{$slideanh->pic_order}}">
            </div>           
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>&nbsp;
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
</div>
</section>   

@endsection 