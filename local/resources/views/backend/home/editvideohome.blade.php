@extends('backend.master.master')
@section('title','Trang chủ')
@section('content')

<section class="content-header">
  <h1>VIDEO HOME<small></small></h1>   
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
                <label>Ảnh Đại Diện (850 x 560 px)</label>      
                @if($errors->has('video_pic'))<p class='text-red'><strong>{{$errors->first('video_pic')}}</p></strong>@endif     
                <input type="file" class="form-control" id="form_pic" name="video_pic" value="{{$videohome->video_pic}}" class="form-control" style="display:none" onchange="changeImg(this)">
                <img id="avatar" class="thumbnail cursorpoint" width="850px" height="560px" src={{url('public/image/'.$videohome->video_pic)}}>
                <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
            </div>       
            <div class="form-group">
                <label>Tên URL : Thay thế code vào mẫu https://www.youtube.com/embed/  DQNDcxRo-2M  ?autoplay=1&amp;loop=1</label>
                @if($errors->has('video_url'))<p class='text-red'><strong>{{$errors->first('video_url')}}</p></strong>@endif   
                <input type="text" class="form-control" id="video_url" name="video_url" placeholder="https://www.youtube.com/embed/DQNDcxRo-2M?autoplay=1&amp;loop=1" value="{{$videohome->video_url}}">
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