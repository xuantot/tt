@extends('backend.master.master')
@section('title','SEO')
@section('content')

<section class="content-header">
<h1>Trang :  {{$seo->seo_page}}<small></small></h1>    
</section>      
<section class="content">
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">THÔNG TIN</h3>
         
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          @if (session('thongbao'))            
                <p class="text-green"><i class="icon fa fa-check-circle"></i> &nbsp;<strong>{{session('thongbao')}}</strong></p>
            @endif
       <br>
       <form  method="post" enctype="multipart/form-data" action="">
        {{csrf_field()}}
          <table class="table table-hover">
              <tbody>
                <tr><th style="width:200px">Ảnh Đại Diện <br>(2000 x 800 px)</th><td>     
                    @if($errors->has('seo_pic'))<p class='text-red'><strong>{{$errors->first('seo_pic')}}</p></strong>@endif     
                    <input type="file" class="form-control" id="form_pic" name="seo_pic" value="{{$seo->seo_pic}}" class="form-control" style="display:none" onchange="changeImg(this)">
                    <img id="avatar" class="thumbnail cursorpoint" width="1000px" height="400px" src={{url('public/image/'.$seo->seo_pic)}}>
                    <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
                </td></tr> 
                <tr><th style="width:200px">Title</th><td>     
                    @if($errors->has('seo_title'))<p class='text-red'><strong>{{$errors->first('seo_title')}}</p></strong>@endif                          
                    <textarea name="seo_title" class="form-control " >{{$seo->seo_title}}</textarea>
                </td></tr>                        
                <tr><th>Mô Tả</th><td>
                    @if($errors->has('seo_des'))<p class='text-red'><strong>{{$errors->first('seo_des')}}</p></strong>@endif   
                    <textarea name="seo_des" class="form-control " >{{$seo->seo_des}}</textarea>
                </td></tr>
                <tr><th>KeyWords</th><td>
                    @if($errors->has('seo_keywords'))<p class='text-red'><strong>{{$errors->first('seo_keywords')}}</p></strong>@endif   
                    <textarea name="seo_keywords" class="form-control" >{{$seo->seo_keywords}}</textarea>
                </td></tr>
                <tr><th>Action</th><td><button type="submit" class="btn btn-flat btn-primary">Sửa Thông Tin</button></td></tr>                          
              </tbody>
        </table>
      </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>

@endsection