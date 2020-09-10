@extends('backend.master.master')
@section('title','Trang chủ')
@section('content')

<section class="content-header">
  <h1>Nội Dung Trang Giới Thiệu<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/dashboard"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
  </ol> 
</section>  
 
<section class="content">

<div class="row">   
    <div class="col-md-12">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">SỬA THÔNG TIN</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form  method="post" enctype="multipart/form-data" action="">
          {{csrf_field()}}
          <div class="box-body">
              @if (session('thongbao'))<p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p> @endif
            
             <div class="form-group">
                <label>Ảnh Đại Diện  (683 x 531 px)</label>      
                @if($errors->has('gt_pic_a'))<p class='text-red'><strong>{{$errors->first('gt_pic_a')}}</p></strong>@endif     
                <input type="file" class="form-control" id="form_pic" name="gt_pic_a" value="{{$contentgt->gt_pic_a}}" class="form-control" style="display:none" onchange="changeImg(this)">
                <img id="avatar" class="thumbnail cursorpoint" width="683px" height="531px" src={{url('public/image/'.$contentgt->gt_pic_a)}}>
                <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
            </div>       
            <div class="form-group">
                <label>Tiêu đề </label>
                @if($errors->has('gt_title_a'))<p class='text-red'><strong>{{$errors->first('gt_title_a')}}</p></strong>@endif   
                <input type="text" class="form-control" id="gt_title_a" name="gt_title_a" placeholder="" value="{{$contentgt->gt_title_a}}">
            </div>    
            <div class="form-group">
              <label>Chi Tiết Nội Dung </label>
              @if($errors->has('gt_content_a'))<p class='text-red'><strong>{{$errors->first('gt_content_a')}}</p></strong>@endif   
              <textarea name="gt_content_a" class="form-control " id="editor1">{{$contentgt->gt_content_a}}</textarea>    
            </div>                

          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </form>
      </div>
    </div>
</div>
</section> 
@endsection 