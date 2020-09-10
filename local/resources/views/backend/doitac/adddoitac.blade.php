@extends('backend.master.master')
@section('title','Thêm Đối Tác')
@section('content')


<section class="content-header">
  <h1>ĐỐI TÁC<small></small></h1>   
  <ol class="breadcrumb">
    <li><a href="admin/doitac/list"><button type="button" class="btn btn-block btn-danger btn-xs">BACK</button></a></li>
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
              <label>Tên Đối Tác</label>
              @if($errors->has('vd_name'))<p class='text-red'><strong>{{$errors->first('vd_name')}}</p></strong>@endif   
              <input type="text" class="form-control" id="vd_name" name="vd_name" placeholder="Đối Tác" value="{{old('vd_name')}}">
            </div>
            <div class="form-group">
              <label>Ảnh (169 : 72 px)</label>    
              @if($errors->has('vd_pic'))<p class='text-red'><strong>{{$errors->first('vd_pic')}}</p></strong>@endif     
              <input type="file" class="form-control" id="form_pic" name="vd_pic" class="form-control" style="display:none" onchange="changeImg(this)">
              <img id="avatar" class="thumbnail cursorpoint" width="169px" height="72px" src="public/image/import-img.png">
              <p class="help-block">Upload file .JPG .PNG and not greater than 5M </p>
          </div>     
            <div class="form-group">
                <label>Link</label>
                @if($errors->has('vd_link'))<p class='text-red'><strong>{{$errors->first('vd_link')}}</p></strong>@endif   
                <input type="text" class="form-control" id="vd_link" name="vd_link" placeholder="ita/khoa-hoc-hot" value="{{old('vd_link')}}">
              </div>
            <div class="form-group">
              <label>Sắp Xếp</label>
              @if($errors->has('vd_order'))<p class='text-red'><strong>{{$errors->first('vd_order')}}</p></strong>@endif   
              <input type="text" class="form-control" id="vd_order" name="vd_order" placeholder="" value="{{old('vd_order')}}" >
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